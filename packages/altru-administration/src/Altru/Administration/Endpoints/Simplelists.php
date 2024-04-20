<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\ApiCollectionSimpleListLoad;
use Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists\Translation;

/**
 * Routing class for the subnamespace `Simplelists`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists\Translation
 *   $translation
 *
 * @api
 */
class Simplelists extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/simplelists/{simple_list_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "translation" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists\Translation",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists\Translation
     *   $_translation
     */
    protected ?Translation $_translation = null;

    /**
     * Gets the data for a simple datalist using ID or Name and any
     * parameters. /appfxwebservice.asmx?op=SimpleDataListLoad,
     * SOAPAction=Blackbaud.AppFx.WebService.API.1/SimpleDataListLoad.
     *
     * @param array{simple_list_id: string, parameters: string} $params An
     *   associative array
     *     - simple_list_id: The ID of simple list.
     *     - parameters: String of comma separated parameter and its
     *   value.Example:
     *   interaction\_category\_id,d4e18cdc-1baa-4d0c-ae41-2e40fcda9d64
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\ApiCollectionSimpleListLoad
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySimpleListId(array $params): ApiCollectionSimpleListLoad
    {
        assert(isset($params['simple_list_id']), new ArgumentException("Parameter `simple_list_id` is required"));
        assert(isset($params['parameters']), new ArgumentException("Parameter `parameters` is required"));

        return new ApiCollectionSimpleListLoad($this->send("get", ["{simple_list_id}" => $params['simple_list_id']], ["parameters" => $params['parameters']]));
    }
}
