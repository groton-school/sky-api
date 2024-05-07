<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\SimpleListTranslation;

/**
 * @api
 */
class Translation extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/simplelists/translation/{simple_list_id}";

    /**
     * /appfxwebservice.asmx?op=SimpleDataListGetTranslation,
     * SOAPAction=Blackbaud.AppFx.WebService.API.1/SimpleDataListGetTranslation.
     *
     * @param array{simple_list_id: string, entry_id: string,
     *   simple_list_name: string} $params An associative array
     *     - simple_list_id: The ID of simple list.
     *     - entry_id: Simple list entry value.
     *     - simple_list_name: Simple list name.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\SimpleListTranslation
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySimpleListId(array $params): SimpleListTranslation
    {
        assert(isset($params['simple_list_id']), new ArgumentException("Parameter `simple_list_id` is required"));
        assert(isset($params['entry_id']), new ArgumentException("Parameter `entry_id` is required"));
        assert(isset($params['simple_list_name']), new ArgumentException("Parameter `simple_list_name` is required"));

        return new SimpleListTranslation($this->send("get", ["simple_list_id" => $params['simple_list_id']], ["entry_id" => $params['entry_id'],
            "simple_list_name" => $params['simple_list_name']]));
    }
}
