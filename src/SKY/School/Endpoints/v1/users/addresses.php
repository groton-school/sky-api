<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AddressAdd;
use Blackbaud\SKY\School\Objects\AddressEdit;
use Blackbaud\SKY\School\Objects\AddressReadCollection;

/**
 * @api
 */
class addresses extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/addresses/{address_id}/{address_type_id}";

    /**
     * Returns a collection of addresses.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\AddressReadCollection
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new AddressReadCollection($this->send("get", ["{user_id}" => $params["user_id"]], []));
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param Blackbaud\SKY\School\Objects\AddressAdd $requestBody Address
     *   information to be updated.
     *
     * @return \int
     *
     * @api
     */
    public function postByUser(array $params, AddressAdd $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
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
     * @param array{user_id: int, address_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - address_id: Format - int32. The ID of the address to be updated.
     * @param Blackbaud\SKY\School\Objects\AddressEdit $requestBody Address
     *   information to be updated.
     *
     * @return \int
     *
     * @api
     */
    public function patchByUser(array $params, AddressEdit $requestBody)
    {
        return $this->send("patch", ["{user_id}" => $params["user_id"],
        "{address_id}" => $params["address_id"]], [], $requestBody);
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
     * @param array{user_id: int, address_id: int, address_type_id: int}
     *   $params An associative array
     *     - user_id: Format - int32. The ID of the user
     *     - address_id: Format - int32. The ID of the user's address to
     *   delete.
     *     - address_type_id: Format - int32. The ID of the user's address
     *   type to delete.
     *
     * @return \void
     *
     * @api
     */
    public function deleteByUserAndAddress(array $params)
    {
        return $this->send("delete", ["{user_id}" => $params["user_id"],
        "{address_id}" => $params["address_id"],
        "{address_type_id}" => $params["address_type_id"]], []);
    }
}
