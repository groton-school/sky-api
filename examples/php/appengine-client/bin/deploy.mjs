#!/usr/bin/env node
import gcloud from '@battis/partly-gcloudy';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

await gcloud.init({ env: { root: path.join(__dirname, '..') } });
try {
  await gcloud.batch.appEngineDeployAndCleanup({ retainVersions: 2 });
  console.log('Deploy complete.');
} catch (e) {
  console.error(e);
}
