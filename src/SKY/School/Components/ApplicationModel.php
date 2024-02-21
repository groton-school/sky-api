<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $date_submitted
 * @property string $date_processed
 * @property \Blackbaud\SKY\School\Components\SourceModel $source
 *
 * @api
 */
class ApplicationModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "date_submitted",
        "date_processed",
        "source",
    ];
}
