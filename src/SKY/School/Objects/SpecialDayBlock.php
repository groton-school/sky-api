<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $block_id 
 * @property string | null $block_description 
 * @property string | null $start_time 
 * @property string | null $end_time 
 *
 * @api
 */
class SpecialDayBlock extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["block_id","block_description","start_time","end_time"];
}
