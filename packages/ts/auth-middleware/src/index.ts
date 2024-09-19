import { Middleware } from 'openapi-fetch';

namespace Authorization {
  export type Credentials = { access_token: string; access_key: string };
  export type CredentialsPromise = () => Promise<Credentials>;

  export function middleware(getCredentials: CredentialsPromise): Middleware {
    return {
      async onRequest({ request }) {
        const { access_token, access_key } = await getCredentials();
        request.headers.set('Authorization', `Bearer ${access_token}`);
        request.headers.set('Bb-Api-Subscription-Key', access_key);
      }
    };
  }
}

export default Authorization;
