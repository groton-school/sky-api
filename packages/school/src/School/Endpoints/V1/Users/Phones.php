<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\PhoneAdd;
use Blackbaud\SKY\School\Components\PhoneReadCollection;
use Blackbaud\SKY\School\Components\PhoneUpdate;
use Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share;

/**
 * Routing class for the subnamespace `Phones`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share $share
 *
 * @api
 */
class Phones extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/{phone_id}/{phone_type_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "share" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share $_share
     */
    protected ?Share $_share = null;

    /**
     * Returns a collection phone numbers for the specified ```user\_id```.
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\PhoneReadCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByUserId(array $params): PhoneReadCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new PhoneReadCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a new phone record for the specified ```user\_id```.
     *
     *  Returns the ID of the phone number created. Requires at least one of
     * the following roles in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\PhoneAdd $requestBody The phone
     *   information to be created.
     *
     * @return int ID of the phone just added.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, PhoneAdd $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }

    /**
     * Removes the specified phone from the user.
     *
     *  If the phone is shared, other users linked to the phone will not be
     * affected.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int, phone_id: int, phone_type_id: int} $params
     *   An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - phone_id: Format - int32. The ID of the user's phone to delete.
     *     - phone_type_id: Format - int32. The ID of the phone type.
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByUserIdAndPhoneIdAndPhoneTypeId(array $params): mixed
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['phone_id']), new ArgumentException("Parameter `phone_id` is required"));
        assert(isset($params['phone_type_id']), new ArgumentException("Parameter `phone_type_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['user_id','phone_id','phone_type_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * Updates an exising phone record for the specified ```user\_id```.
     *
     *  Returns the ID of the phone number updated.
     *
     * @param array{user_id: int, phone_id: int, split_phone_if_shared?: bool}
     *   $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - phone_id: Format - int32. The phone id to be updated.
     *     - split_phone_if_shared: Set to true if phone number is shared
     * @param \Blackbaud\SKY\School\Components\PhoneUpdate $requestBody The
     *   phone information to be updated.
     *
     * @return int ID of the phone just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserIdAndPhoneId(array $params, PhoneUpdate $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['phone_id']), new ArgumentException("Parameter `phone_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['user_id','phone_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['split_phone_if_shared']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
