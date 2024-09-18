import Authorization from '@groton/sky-api.auth-middleware';
import createClient from 'openapi-fetch';
import type { components, paths } from './schema.js';

type School = components['schemas'];

namespace School {
  export function Client(getCredentials: Authorization.CredentialsPromise) {
    const client = createClient<paths>({
      baseUrl: 'https://api.sky.blackbaud.com/school'
    });
    client.use(Authorization.middleware(getCredentials));
    return client;
  }
}

export default School;
