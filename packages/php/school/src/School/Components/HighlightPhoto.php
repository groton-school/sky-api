<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Photo model
 *
 * @property ?int $id Photo ID
 * @property ?string $caption Photo Caption
 * @property ?string $large_filename Large Filename
 * @property ?string $large_filename_url Large Filename URL
 * @property ?string $thumb_filename Thumb Filename
 * @property ?string $thumb_filename_url Thumb Filename URL
 *
 * @api
 */
class HighlightPhoto extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "caption" => "string",
        "large_filename" => "string",
        "large_filename_url" => "string",
        "thumb_filename" => "string",
        "thumb_filename_url" => "string",
    ];
}
