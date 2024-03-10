<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id
 * @property ?string $date_submitted
 * @property ?string $date_processed
 * @property \Blackbaud\SKY\School\Components\SourceModel $source
 *
 * @api
 */
class ApplicationModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "date_submitted" => "string",
        "date_processed" => "string",
        "source" => "\Blackbaud\SKY\School\Components\SourceModel",
    ];
}
