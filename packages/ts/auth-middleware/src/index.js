var Authorization;
(function (Authorization) {
    function middleware(getCredentials) {
        return {
            async onRequest({ request }) {
                const { access_token, access_key } = await getCredentials();
                request.headers.set('Authorization', `Bearer ${access_token}`);
                request.headers.set('Bb-Api-Subscription-Key', access_key);
            }
        };
    }
    Authorization.middleware = middleware;
})(Authorization || (Authorization = {}));
export default Authorization;
