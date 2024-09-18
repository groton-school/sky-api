import Authorization from '@groton/sky-api.auth-middleware';
import createClient from 'openapi-fetch';
import type { components, paths } from './schema.js';

namespace SKY {
  export type OneRoster = components['schemas'];
  export namespace School {
    export function client(getCredentials: Authorization.CredentialsPromise) {
      const client = createClient<paths>();
      client.use(Authorization.middleware(getCredentials));
      return client;
    }
  }
}

export default SKY;
