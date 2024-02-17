<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $title
 * @property string $description
 * @property string $assignDate
 * @property string $dueDate
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $class
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $category
 * @property \Blackbaud\SKY\OneRoster\Objects\GuidRefModel $gradingPeriod
 * @property double $resultValueMin
 * @property double $resultValueMax
 * @property string $sourcedId
 * @property string $status
 * @property string $dateLastModified
 * @property string[] $metadata
 *
 * @api
 */
class LineItemModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "title",
        "description",
        "assignDate",
        "dueDate",
        "class",
        "category",
        "gradingPeriod",
        "resultValueMin",
        "resultValueMax",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
