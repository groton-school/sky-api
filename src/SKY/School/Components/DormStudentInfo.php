<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $grad_year
 *
 * @api
 */
class DormStudentInfo extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "grad_year" => "string",
    ];
}
