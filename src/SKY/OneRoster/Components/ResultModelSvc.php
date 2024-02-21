<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Results model
 *
 * @property string $scoreStatus Score status
 * @property string $scoreDate Score date
 * @property \double $score Score
 * @property string $comment Comment
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $lineItem
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $student
 * @property string $sourcedId Unique identifier for the instance
 * @property string $status Status for the instance
 * @property string $dateLastModified Date and time the instance was last
 *   modified
 * @property \string[] $metadata Extension properties for the instance
 *
 * @api
 */
class ResultModelSvc extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "scoreStatus",
        "scoreDate",
        "score",
        "comment",
        "lineItem",
        "student",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
