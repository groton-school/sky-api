import cli from '@battis/qui-cli';
import { glob } from 'glob';
import fs from 'node:fs';
import path from 'node:path';
import prettier from 'prettier';

type Map = {
  schema: string;
  path: string;
  namespace: string;
  package: string;
};

const CWD = process.cwd();

(async () => {
  let {
    values: { mapPath, templatePath, prettierConfig }
  } = cli.init({
    args: {
      options: {
        mapPath: {
          short: 'm',
          description: `Path to the schema map JSON file (refer to README.md)`,
          default: './var/schema-map.json'
        },
        templatePath: {
          short: 't',
          description: `Path to the template package (refer to README.md)`,
          default: './packages/typescript-template'
        },
        prettierConfig: {
          short: 'p',
          description: `Path to Prettier configuration file`,
          default: './package.json'
        }
      }
    }
  });

  const spinner = cli.spinner();

  spinner.start('Parsing schema map');
  mapPath = path.resolve(CWD, mapPath!);
  const maps = JSON.parse(fs.readFileSync(mapPath).toString()) as Map[];
  spinner.succeed(`Schema map: ${cli.colors.url(mapPath)}`);

  spinner.start('Parsing template');
  templatePath = path.join(CWD, templatePath!);
  const templateFilePaths = await glob(path.join(templatePath, './**/*'), {
    ignore: '**/node_modules/**'
  });
  spinner.succeed(`Template: ${cli.colors.url(templatePath)}`);

  spinner.start('Finding Prettier configuration');
  prettierConfig = path.resolve(CWD, prettierConfig!);
  const prettierOptions = await prettier.resolveConfig(prettierConfig);
  spinner.succeed(`Pretter config: ${cli.colors.url(prettierConfig)}`);

  for (const map of maps) {
    map.schema = path.resolve(path.dirname(mapPath), map.schema);
    spinner.start(cli.colors.url(map.schema));
    map.path = path.resolve(path.dirname(mapPath), map.path);
    const schema = JSON.parse(fs.readFileSync(map.schema).toString());
    for (const templateFilePath of templateFilePaths) {
      const targetPath = path.join(
        map.path,
        templateFilePath.replace(templatePath, '.')
      );
      spinner.start(cli.colors.url(targetPath));
      if (fs.statSync(templateFilePath).isDirectory()) {
        if (!fs.existsSync(targetPath)) {
          fs.mkdirSync(targetPath);
        }
      } else {
        const contents = fs
          .readFileSync(templateFilePath)
          .toString()
          .replace(/__NAMESPACE__/g, map.namespace)
          .replace(/__PACKAGE__/g, map.package)
          .replace(/__BASE_URL__/g, schema.servers[0].url);
        if (path.basename(templateFilePath) == 'package.json') {
          const pkg = JSON.parse(fs.readFileSync(targetPath).toString());
          fs.writeFileSync(
            targetPath,
            await prettier.format(
              JSON.stringify({
                ...pkg,
                ...JSON.parse(contents)
              }),
              {
                ...prettierOptions,
                filepath: targetPath
              }
            )
          );
        } else {
          fs.writeFileSync(
            targetPath,
            await prettier.format(contents, {
              ...prettierOptions,
              filepath: targetPath
            })
          );
        }
      }
      spinner.succeed(cli.colors.url(targetPath));
    }
    cli.shell.exec(
      `npx openapi-typescript ${map.schema} -o ${path.join(map.path, 'src/schema.ts')}`
    );
    spinner.succeed(cli.colors.value(map.package));
  }
})();
