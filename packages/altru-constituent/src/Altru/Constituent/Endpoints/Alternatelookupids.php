<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAlternateLookupId;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAlternateLookupId;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAlternateLookupId;

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
     * This dataform template is used to add an alternate lookup ID for a
     * constituent.
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
    public function postBy(NewConstituentAlternateLookupId $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This dataform template is used to edit a constituent's alternate lookup
     * ID.
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

        return new ConstituentAlternateLookupId($this->send("get", ["{alternate_lookup_id_id}" => $params['alternate_lookup_id_id']], []));
    }

    /**
     * This record operation deletes the specified constituent alternate
     * lookup ID record.
     *
     * @param array{alternate_lookup_id_id: string} $params An associative
     *   array
     *     - alternate_lookup_id_id: The alternate lookup id id
     *
     * @return void Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByAlternateLookupIdId(array $params): void
    {
        assert(isset($params['alternate_lookup_id_id']), new ArgumentException("Parameter `alternate_lookup_id_id` is required"));

        return $this->send("delete", ["{alternate_lookup_id_id}" => $params['alternate_lookup_id_id']], []);
    }

    /**
     * This dataform template is used to edit a constituent's alternate lookup
     * ID.
     *
     * @param array{alternate_lookup_id_id: string} $params An associative
     *   array
     *     - alternate_lookup_id_id: The alternate lookup id id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAlternateLookupId
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByAlternateLookupIdId(array $params, UpdateConstituentAlternateLookupId $requestBody): void
    {
        assert(isset($params['alternate_lookup_id_id']), new ArgumentException("Parameter `alternate_lookup_id_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{alternate_lookup_id_id}" => $params['alternate_lookup_id_id']], [], $requestBody);
    }
}
