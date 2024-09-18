import { Middleware } from 'openapi-fetch';

namespace Authorization {
  export type Credentials = { access_token: string; access_key: string };
  export type CredentialsPromise = () => Promise<Credentials>;

  export function middleware(getCredentials: CredentialsPromise) {
    return {
      async onRequest({ request }) {
        const credentials = await getCredentials();
        request.headers.set(
          'Authorization',
          `Bearer ${credentials.access_token}`
        );
        request.headers.set('Bb-Api-Subscription-Key', credentials.access_key);
      }
    } as Middleware;
  }
}

export default Authorization;
