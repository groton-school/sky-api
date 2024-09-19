import Authorization from '@groton/sky-api.auth-middleware';
import createClient from 'openapi-fetch';
import type { components, paths } from './schema.js';

type OneRoster = components['schemas'];

namespace OneRoster {
  export function Client(getCredentials: Authorization.CredentialsPromise) {
    const client = createClient<paths>({
      baseUrl: 'https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1'
    });
    client.use(Authorization.middleware(getCredentials));
    return client;
  }
}

export default OneRoster;
