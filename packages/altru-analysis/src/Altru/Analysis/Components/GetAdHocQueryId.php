<?php

namespace Blackbaud\SKY\Altru\Analysis\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * The ad-hoc query ID for a given query name.
 *
 * @property string $id The ad-hoc query ID.
 *
 * @api
 */
class GetAdHocQueryId extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
    ];
}
