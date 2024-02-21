<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class HighlightPhoto extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "caption",
        "large_filename",
        "large_filename_url",
        "thumb_filename",
        "thumb_filename_url",
    ];
}
