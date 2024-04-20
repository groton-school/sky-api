<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentPhone;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentPhone;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhone;

/**
 * @api
 */
class Phones extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/phones/{phone_id}";

    /**
     * This dataform template is used to add phone records.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentPhone
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentPhone $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This dataform template is used to edit phone records.
     *
     * @param array{phone_id: string} $params An associative array
     *     - phone_id: The phone id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentPhone
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByPhoneId(array $params): ConstituentPhone
    {
        assert(isset($params['phone_id']), new ArgumentException("Parameter `phone_id` is required"));

        return new ConstituentPhone($this->send("get", ["{phone_id}" => $params['phone_id']], []));
    }

    /**
     * This deletion handles only the basic deletion rules for a phone
     * (currently none).
     *
     * @param array{phone_id: string} $params An associative array
     *     - phone_id: The phone id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByPhoneId(array $params): mixed
    {
        assert(isset($params['phone_id']), new ArgumentException("Parameter `phone_id` is required"));

        return $this->send("delete", ["{phone_id}" => $params['phone_id']], []);
    }

    /**
     * This dataform template is used to edit phone records.
     *
     * @param array{phone_id: string} $params An associative array
     *     - phone_id: The phone id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentPhone
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnPhoneId(array $params, UpdateConstituentPhone $requestBody): mixed
    {
        assert(isset($params['phone_id']), new ArgumentException("Parameter `phone_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{phone_id}" => $params['phone_id']], [], $requestBody);
    }
}
