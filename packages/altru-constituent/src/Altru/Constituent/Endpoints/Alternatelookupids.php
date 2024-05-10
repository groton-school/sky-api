<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAlternateLookupId;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAlternateLookupId;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAlternateLookupId;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;

/**
 * @api
 */
class Alternatelookupids extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/alternatelookupids/{alternate_lookup_id_id}";

    /**
     * This operation is used to add an alternate lookup id for a constituent.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAlternateLookupId
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentAlternateLookupId $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }

    /**
     * This operation is used to edit a constituent's alternate lookup id.
     *
     * @param array{alternate_lookup_id_id: string} $params An associative
     *   array
     *     - alternate_lookup_id_id: The alternate lookup id id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAlternateLookupId
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByAlternateLookupIdId(array $params): ConstituentAlternateLookupId
    {
        assert(isset($params['alternate_lookup_id_id']), new ArgumentException("Parameter `alternate_lookup_id_id` is required"));

        return new ConstituentAlternateLookupId($this->send("get", array_filter($params, fn($key) => in_array($key, ['alternate_lookup_id_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * This record operation deletes the specified constituent alternate
     * lookup id record.
     *
     * @param array{alternate_lookup_id_id: string} $params An associative
     *   array
     *     - alternate_lookup_id_id: The alternate lookup id id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByAlternateLookupIdId(array $params): mixed
    {
        assert(isset($params['alternate_lookup_id_id']), new ArgumentException("Parameter `alternate_lookup_id_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['alternate_lookup_id_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * This operation is used to edit a constituent's alternate lookup id.
     *
     * @param array{alternate_lookup_id_id: string} $params An associative
     *   array
     *     - alternate_lookup_id_id: The alternate lookup id id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAlternateLookupId
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnAlternateLookupIdId(array $params, EditConstituentAlternateLookupId $requestBody): mixed
    {
        assert(isset($params['alternate_lookup_id_id']), new ArgumentException("Parameter `alternate_lookup_id_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['alternate_lookup_id_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
