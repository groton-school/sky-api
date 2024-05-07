<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AddressAdd;
use Blackbaud\SKY\School\Components\AddressEdit;
use Blackbaud\SKY\School\Components\AddressReadCollection;
use Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share;

/**
 * Routing class for the subnamespace `Addresses`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share $share
 *
 * @api
 */
class Addresses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/addresses/{address_id}/{address_type_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "share" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share $_share
     */
    protected ?Share $_share = null;

    /**
     * Returns a collection of addresses.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\AddressReadCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByUserId(array $params): AddressReadCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new AddressReadCollection($this->send("get", ["user_id" => $params['user_id']], []));
    }

    /**
     * Returns the ID of the address just created.
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\AddressAdd $requestBody Address
     *   information to be updated.
     *
     * @return int ID of the address just added.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, AddressAdd $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["user_id" => $params['user_id']], [], $requestBody);
    }

    /**
     * Returns ID of the address just updated.
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
     * @param array{user_id: int, address_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - address_id: Format - int32. The ID of the address to be updated.
     * @param \Blackbaud\SKY\School\Components\AddressEdit $requestBody
     *   Address information to be updated.
     *
     * @return int ID of the address just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserIdAndAddressId(array $params, AddressEdit $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["user_id" => $params['user_id'],
            "address_id" => $params['address_id']], [], $requestBody);
    }

    /**
     * Removes the specified address from the user.
     *
     *  If the address is shared, other users linked to the address will not
     * be affected.
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
     * @param array{user_id: int, address_id: int, address_type_id: int}
     *   $params An associative array
     *     - user_id: Format - int32. The ID of the user
     *     - address_id: Format - int32. The ID of the user's address to
     *   delete.
     *     - address_type_id: Format - int32. The ID of the user's address
     *   type to delete.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByUserIdAndAddressIdAndAddressTypeId(array $params): mixed
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));
        assert(isset($params['address_type_id']), new ArgumentException("Parameter `address_type_id` is required"));

        return $this->send("delete", ["user_id" => $params['user_id'],
            "address_id" => $params['address_id'],
            "address_type_id" => $params['address_type_id']], []);
    }
}
