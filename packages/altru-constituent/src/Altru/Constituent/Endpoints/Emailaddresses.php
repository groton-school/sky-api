<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentEmailAddress;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentEmailAddress;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentEmailAddress;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;

/**
 * @api
 */
class Emailaddresses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/emailaddresses/{email_address_id}";

    /**
     * This operation is used to add email addresses.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentEmailAddress
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentEmailAddress $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }

    /**
     * This operation is used to edit email addresses.
     *
     * @param array{email_address_id: string} $params An associative array
     *     - email_address_id: The email address id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentEmailAddress
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByEmailAddressId(array $params): ConstituentEmailAddress
    {
        assert(isset($params['email_address_id']), new ArgumentException("Parameter `email_address_id` is required"));

        return new ConstituentEmailAddress($this->send("get", array_filter($params, fn($key) => in_array($key, ['email_address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * This deletion handles only the basic deletion rules for an email
     * address (currently none).
     *
     * @param array{email_address_id: string} $params An associative array
     *     - email_address_id: The email address id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByEmailAddressId(array $params): mixed
    {
        assert(isset($params['email_address_id']), new ArgumentException("Parameter `email_address_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['email_address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * This operation is used to edit email addresses.
     *
     * @param array{email_address_id: string} $params An associative array
     *     - email_address_id: The email address id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentEmailAddress
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnEmailAddressId(array $params, EditConstituentEmailAddress $requestBody): mixed
    {
        assert(isset($params['email_address_id']), new ArgumentException("Parameter `email_address_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['email_address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
