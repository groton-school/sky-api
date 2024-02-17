<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\PhoneAdd;
use Blackbaud\SKY\School\Objects\PhoneReadCollection;
use Blackbaud\SKY\School\Objects\PhoneUpdate;

/**
 * @api
 */
class phones extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/{phone_id}/{phone_type_id}";

    /**
     * Returns a collection phone numbers for the specified ```user_id```.
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\PhoneReadCollection
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new PhoneReadCollection($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }

    /**
     * Creates a new phone record for the specified ```user_id```.
     *
     * Returns the ID of the phone number created. Requires at least one of
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
     * @param Blackbaud\SKY\School\Objects\PhoneAdd $requestBody The phone
     *   information to be created.
     *
     * @return \int
     *
     * @api
     */
    public function postByUser(array $params, PhoneAdd $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
    }

    /**
     * Removes the specified phone from the user.
     *
     * If the phone is shared, other users linked to the phone will not be
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
     * @param array{user_id: int, phone_id: int, phone_type_id: int} $params
     *   An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - phone_id: Format - int32. The ID of the user's phone to delete.
     *     - phone_type_id: Format - int32. The ID of the phone type.
     *
     * @return \void
     *
     * @api
     */
    public function deleteByUserAndPhone(array $params)
    {
        return $this->send("delete", ["{user_id}" => $params["user_id"],
        "{phone_id}" => $params["phone_id"],
        "{phone_type_id}" => $params["phone_type_id"]], []);
    }

    /**
     * Updates an exising phone record for the specified ```user_id```.
     *
     * Returns the ID of the phone number updated.
     *
     * @param array{user_id: int, phone_id: int, split_phone_if_shared?: bool}
     *   $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - phone_id: Format - int32. The phone id to be updated.
     *     - split_phone_if_shared: (Optional) Set to true if phone number is
     *   shared
     * @param Blackbaud\SKY\School\Objects\PhoneUpdate $requestBody The phone
     *   information to be updated.
     *
     * @return \int
     *
     * @api
     */
    public function patchByUser(array $params, PhoneUpdate $requestBody)
    {
        return $this->send("patch", ["{user_id}" => $params["user_id"],
        "{phone_id}" => $params["phone_id"]], ["split_phone_if_shared" => $params["split_phone_if_shared"]], $requestBody);
    }
}
