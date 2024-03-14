#!/usr/bin/env node
import gcloud from '@battis/partly-gcloudy';

await gcloud.init();
try {
  await gcloud.batch.appEngineDeployAndCleanup({ retainVersions: 2 });
  console.log('Deploy complete.');
} catch (e) {
  console.log.error(e);
}
