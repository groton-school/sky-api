<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id 
 * @property string | null $date_submitted 
 * @property string | null $date_processed 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\SourceModel $source 
 *
 * @api
 */
class ApplicationModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","date_submitted","date_processed","source"];
}
