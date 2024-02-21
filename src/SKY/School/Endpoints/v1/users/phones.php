<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\PhoneAdd;
use Blackbaud\SKY\School\Components\PhoneReadCollection;
use Blackbaud\SKY\School\Components\PhoneUpdate;
use Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share;

/**
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share $share
 *
 * @api
 */
class Phones extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/{phone_id}/{phone_type_id}";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "share" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Phones\Share $_share
     */
    protected ?Share $_share = null;

    /**
     * Returns a collection phone numbers for the specified ```user_id```.
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\PhoneReadCollectionSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): PhoneReadCollection
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new PhoneReadCollection($this->send("get", ["{user_id}" => $user_id], []));
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\PhoneAdd $requestBody The phone
     *   information to be created.
     *
     * @return intID of the phone just added.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, PhoneAdd $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param int $phone_id Format - int32. The ID of the user's phone to
     *   delete.
     * @param int $phone_type_id Format - int32. The ID of the phone type.
     *
     * @return voidSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByUserAndPhone(int $user_id, int $phone_id, int $phone_type_id): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($phone_id !== null, new ArgumentException("Parameter `phone_id` is required"));
        assert($phone_type_id !== null, new ArgumentException("Parameter `phone_type_id` is required"));

        return $this->send("delete", ["{user_id}" => $user_id,
        "{phone_id}" => $phone_id,
        "{phone_type_id}" => $phone_type_id], []);
    }

    /**
     * Updates an exising phone record for the specified ```user_id```.
     *
     * Returns the ID of the phone number updated.
     *
     * @param int $user_id Format - int32. The ID of the user.
     * @param int $phone_id Format - int32. The phone id to be updated.
     * @param ?bool $split_phone_if_shared (Optional) Set to true if phone
     *   number is shared
     * @param \Blackbaud\SKY\School\Components\PhoneUpdate $requestBody The
     *   phone information to be updated.
     *
     * @return intID of the phone just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByUser(int $user_id, int $phone_id, ?bool $split_phone_if_shared = null, PhoneUpdate $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($phone_id !== null, new ArgumentException("Parameter `phone_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id,
        "{phone_id}" => $phone_id], ["split_phone_if_shared" => $split_phone_if_shared], $requestBody);
    }
}
