<?php

namespace GrotonSchool\OAuth2\Client\Provider;

use Exception;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Token\AccessTokenInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;
use Psr\Http\Message\ResponseInterface;

class BlackbaudSKY extends AbstractProvider
{
    use ArrayAccessorTrait;
    public const ACCESS_KEY = 'Bb-Api-Subscription-Key';
    public const ACCESS_TOKEN = 'access_token';

    public const SESSION_STATE = 'oauth2_state';

    public const ARG_AUTH_CODE = 'authorization_code';

    public const PARAM_CODE = 'code';
    public const PARAM_STATE = 'state';

    public const OPT_PARAMS = 'params';
    public const OPT_REDIRECT_URI = 'redirect_uri';
    public const OPT_AUTH_CODE_CALLBACK = 'authorization_code_callback';
    public const OPT_ACCESS_TOKEN_CALLBACK = 'access_token_callback';
    public const OPT_ERROR_CALLBACK = 'error_callback';

    private $accessKey;

    /** @var AccessToken */
    protected $accessToken;

    public function __construct(array $options = [], array $collaborators = [])
    {
        parent::__construct($options, $collaborators);

        if (empty($options[self::ACCESS_KEY])) {
            throw new Exception('Blackbaud access key required');
        } else {
            $this->accessKey = $options[self::ACCESS_KEY];
        }

        if (!empty($options[self::ACCESS_TOKEN])) {
            $this->accessToken = $options[self::ACCESS_TOKEN];
        }
    }

    public function getBaseAuthorizationUrl()
    {
        return 'https://oauth2.sky.blackbaud.com/authorization';
    }

    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://oauth2.sky.blackbaud.com/token';
    }

    public function getBaseApiUrl()
    {
        return 'https://api.sky.blackbaud.com';
    }

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        // TODO waiting on resolution of https://app.blackbaud.com/support/cases/018662802
    }

    protected function getDefaultScopes()
    {
        return [];
    }

    protected function checkResponse(ResponseInterface $response, $data) {}

    protected function createResourceOwner(array $response, AccessToken $token) {}

    /**
     * Returns authorization headers for the 'bearer' grant.
     *
     * @param  AccessTokenInterface|string|null $token Either a string or an access token instance
     * @return array
     */
    protected function getAuthorizationHeaders($token = null)
    {
        return [
            self::ACCESS_KEY => $this->accessKey,
            'Authorization' => 'Bearer ' . $token,
        ];
    }

    public function getAccessToken($grant = '', array $options = [])
    {
        if (!empty($grant)) {
            $this->accessToken = parent::getAccessToken($grant, $options);
            return $this->accessToken;
        } elseif (!empty($this->accessToken)) {
            return $this->accessToken->getToken();
        } else {
            throw new Exception('Stored access token or grant type required');
        }
    }

    public function setAccessToken(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /** @deprecated 0.2.3 externalized to {@link https://github.com/groton-school/appengine-sky-api groton-school/appengine-sky-api} */
    public function endpoint(
        string $path,
        ?AccessToken $token = null
    ): SkyAPIEndpoint {
        if (!$token) {
            if ($this->accessToken) {
                $token = $this->accessToken;
            } else {
                throw new Exception('No access token provided or cached');
            }
        }
        return new SkyAPIEndpoint($this, $path, $token);
    }
}
