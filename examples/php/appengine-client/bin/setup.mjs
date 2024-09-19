#!/usr/bin/env node
import options from './options.mjs';
import gcloud from '@battis/partly-gcloudy';
import cli from '@battis/qui-cli';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

async function guideBlackbaudAppCreation({
  url,
  accessKey = undefined,
  clientId = undefined,
  clientSecret = undefined
}) {
  accessKey = await cli.prompts.input({
    message: `${options.accessKey.description} from ${cli.colors.url(
      options.accessKey.url
    )}`,
    validate: cli.validators.notEmpty,
    default: accessKey
  });
  await cli.prompts.confirm({
    message: `Create a new app at ${cli.colors.url(options.clientId.url)}`
  });
  clientId = await cli.prompts.input({
    message: options.clientId.description,
    validate: cli.validators.notEmpty,
    default: clientId
  });
  clientSecret = await cli.prompts.input({
    message: options.clientSecret.description,
    validate: cli.validators.notEmpty,
    default: clientSecret
  });
  const redirectUrl = `${url}/redirect`;
  await cli.prompts.confirm({
    message: `Configure ${cli.colors.value(
      redirectUrl
    )} as the app's redirect URL`
  });
  await cli.prompts.confirm({
    message: `Limit the SKY API scopes as described at ${cli.colors.url(
      'https://github.com/groton-school/blackbaud-to-google-group-sync/blob/main/docs/blackbaud-api-scope.md'
    )}`
  });
  return { accessKey, clientId, clientSecret, redirectUrl };
}

(async () => {
  const args = await gcloud.init({
    env: { root: path.join(__dirname, '..') },
    args: {
      options,
      flags: {
        deploy: {
          description:
            'Include the (time-consuming) deploy step to App Engine (default true, --no-deploy to skip)'
        }
      }
    }
  });
  if (args.values.verbose) {
    cli.shell.setSilent(false);
  }

  if (gcloud.ready()) {
    const { project, appEngine } = await gcloud.batch.appEnginePublish({
      name: args.values.name,
      id: args.values.project,
      suggestedName: 'Blackbaud SKY API AppEngine Client Example',
      billingAccountId: args.values.billing,
      region: args.values.region,
      env: { keys: { urlVar: 'URL' } },
      prebuild: () => {
        return true;
      },
      deploy: args.values.deploy
    });
    const url = `https://${appEngine.defaultHostname}`;

    // guide storage of Blackbaud credentials in Secret Manager, SKY App creation and configuration
    const blackbaud = await guideBlackbaudAppCreation({
      url,
      accessKey: args.values.accessKey,
      clientId: args.values.clientId,
      clientSecret: args.values.clientSecret
    });
    await gcloud.secrets.set({
      name: 'BLACKBAUD_ACCESS_KEY',
      value: blackbaud.accessKey
    });
    await gcloud.secrets.set({
      name: 'BLACKBAUD_CLIENT_ID',
      value: blackbaud.clientId
    });
    await gcloud.secrets.set({
      name: 'BLACKBAUD_CLIENT_SECRET',
      value: blackbaud.clientSecret
    });
    await gcloud.secrets.set({
      name: 'BLACKBAUD_REDIRECT_URL',
      value: blackbaud.redirectUrl
    });
    await gcloud.secrets.enableAppEngineAccess();
  }
})();
