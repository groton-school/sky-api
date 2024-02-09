<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $date_submitted
 * @property string|null $date_processed
 * @property SourceModel $source
 * @api
 */
class ApplicationModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","date_submitted","date_processed","source"];
}
