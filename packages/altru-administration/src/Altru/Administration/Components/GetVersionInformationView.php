<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetVersionInformation
 *
 * @property string $infinity_version The infinity version.
 * @property string $bbis_version The bbis version.
 * @property string $sql_clr_version The sql clr version.
 *
 * @api
 */
class GetVersionInformationView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "infinity_version" => "string",
        "bbis_version" => "string",
        "sql_clr_version" => "string",
    ];
}
