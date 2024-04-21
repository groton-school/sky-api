#!/usr/bin/env node
import gcloud from '@battis/partly-gcloudy';

await gcloud.init({ env: { loadDotEnv: 'examples/appengine-client/.env' } });
try {
  await gcloud.batch.appEngineDeployAndCleanup({ retainVersions: 2 });
  console.log('Deploy complete.');
} catch (e) {
  console.error(e);
}
