import Authorization from '@groton/sky-api.auth-middleware';
import createClient from 'openapi-fetch';
import type { components, paths } from './schema.js';

type __NAMESPACE__ = components['schemas'];

namespace __NAMESPACE__ {
  export function Client(getCredentials: Authorization.CredentialsPromise) {
    const client = createClient<paths>({ baseUrl: '__BASE_URL__' });
    client.use(Authorization.middleware(getCredentials));
    return client;
  }
}

export default __NAMESPACE__;
