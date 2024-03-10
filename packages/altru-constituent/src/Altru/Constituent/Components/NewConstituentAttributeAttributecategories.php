<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewConstituentAttributeAttributecategories
 *
 * @property string $id id
 * @property int $data_type_code datatypecode
 * @property string $constituent_search_list_catalog_id
 *   constituentsearchlistcatalogid
 * @property string $code_table_name codetablename
 *
 * @api
 */
class NewConstituentAttributeAttributecategories extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "data_type_code" => "int",
        "constituent_search_list_catalog_id" => "string",
        "code_table_name" => "string",
    ];
}
