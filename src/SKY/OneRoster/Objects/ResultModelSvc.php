<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Results model
 *
 * @property string | null $scoreStatus Score status
 * @property string | null $scoreDate Score date
 * @property double | null $score Score
 * @property string | null $comment Comment
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $lineItem 
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\GuidRefModel
 *   $student 
 * @property string | null $sourcedId Unique identifier for the instance
 * @property string | null $status Status for the instance
 * @property string | null $dateLastModified Date and time the instance was
 *   last modified
 * @property string[] | null $metadata Extension properties for the instance
 *
 * @api
 */
class ResultModelSvc extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["scoreStatus","scoreDate","score","comment","lineItem","student","sourcedId","status","dateLastModified","metadata"];
}
