<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Photo model
 *
 * @property int | null $id Photo ID
 * @property string | null $caption Photo Caption
 * @property string | null $large_filename Large Filename
 * @property string | null $large_filename_url Large Filename URL
 * @property string | null $thumb_filename Thumb Filename
 * @property string | null $thumb_filename_url Thumb Filename URL
 *
 * @api
 */
class HighlightPhoto extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","caption","large_filename","large_filename_url","thumb_filename","thumb_filename_url"];
}
