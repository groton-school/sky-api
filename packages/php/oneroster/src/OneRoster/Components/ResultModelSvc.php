<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Results model
 *
 * @property ?string $scoreStatus Score status
 * @property ?string $scoreDate Score date
 * @property ?float $score Score
 * @property ?string $comment Comment
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $lineItem
 * @property \Blackbaud\SKY\OneRoster\Components\GuidRefModel $student
 * @property ?string $sourcedId Unique identifier for the instance
 * @property ?string $status Status for the instance
 * @property ?string $dateLastModified Date and time the instance was last
 *   modified
 * @property ?array{...<string, string>} $metadata Extension properties for
 *   the instance
 *
 * @api
 */
class ResultModelSvc extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "scoreStatus" => "string",
        "scoreDate" => "string",
        "score" => "float",
        "comment" => "string",
        "lineItem" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "student" => "\Blackbaud\SKY\OneRoster\Components\GuidRefModel",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
