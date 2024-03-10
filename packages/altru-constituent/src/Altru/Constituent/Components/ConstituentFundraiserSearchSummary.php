<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchConstituentFundraiser
 *
 * @property string $id The id.
 * @property string $sort_constituent_name The name.
 * @property string $city The city.
 * @property string $state The state.
 * @property string $post_code The zip/postal code.
 * @property string $phone The phone.
 * @property string $constituent_type The constituent type.
 * @property string $site The site.
 * @property string $name The name.
 *
 * @api
 */
class ConstituentFundraiserSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "sort_constituent_name" => "string",
        "city" => "string",
        "state" => "string",
        "post_code" => "string",
        "phone" => "string",
        "constituent_type" => "string",
        "site" => "string",
        "name" => "string",
    ];
}
