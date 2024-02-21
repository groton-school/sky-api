<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AddressAdd;
use Blackbaud\SKY\School\Components\AddressEdit;
use Blackbaud\SKY\School\Components\AddressReadCollection;
use Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share;

/**
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses\Share $share
 *
 * @api
 */
class Addresses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/addresses/{address_id}/{address_type_id}";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
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
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\AddressReadCollectionSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): AddressReadCollection
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new AddressReadCollection($this->send("get", ["{user_id}" => $user_id], []));
    }

    /**
     * Returns the ID of the address just created.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\AddressAdd $requestBody Address
     *   information to be updated.
     *
     * @return intID of the address just added.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, AddressAdd $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }

    /**
     * Returns ID of the address just updated.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param int $user_id Format - int32. The ID of the user.
     * @param int $address_id Format - int32. The ID of the address to be
     *   updated.
     * @param \Blackbaud\SKY\School\Components\AddressEdit $requestBody
     *   Address information to be updated.
     *
     * @return intID of the address just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByUser(int $user_id, int $address_id, AddressEdit $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($address_id !== null, new ArgumentException("Parameter `address_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id,
        "{address_id}" => $address_id], [], $requestBody);
    }

    /**
     * Removes the specified address from the user.
     *
     * If the address is shared, other users linked to the address will not be
     * affected.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param int $user_id Format - int32. The ID of the user
     * @param int $address_id Format - int32. The ID of the user's address to
     *   delete.
     * @param int $address_type_id Format - int32. The ID of the user's
     *   address type to delete.
     *
     * @return voidReturned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByUserAndAddress(int $user_id, int $address_id, int $address_type_id): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($address_id !== null, new ArgumentException("Parameter `address_id` is required"));
        assert($address_type_id !== null, new ArgumentException("Parameter `address_type_id` is required"));

        return $this->send("delete", ["{user_id}" => $user_id,
        "{address_id}" => $address_id,
        "{address_type_id}" => $address_type_id], []);
    }
}
