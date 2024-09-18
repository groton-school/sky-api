<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with candidate visit information
 *
 * @property ?int $id The ID of the candidate visit
 * @property \Blackbaud\SKY\School\Components\SourceModel $type
 * @property ?string $start_time The start time of the visit
 * @property ?string $end_time The start time of the visit
 * @property \Blackbaud\SKY\School\Components\UserBaseReadModel $guide User
 *   base read model
 * @property ?string $guide_other Information for non-user guide
 * @property ?\Blackbaud\SKY\School\Components\UserBaseReadModel[]
 *   $accompanying_adults An array of accompanying adult objects
 * @property ?bool $is_rescheduled True if visit was rescheduled
 * @property ?bool $did_not_show True if candidate did not show for visit
 * @property ?string $comment The comment for the visit
 *
 * @api
 */
class CandidateVisitReadModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "type" => "\Blackbaud\SKY\School\Components\SourceModel",
        "start_time" => "string",
        "end_time" => "string",
        "guide" => "\Blackbaud\SKY\School\Components\UserBaseReadModel",
        "guide_other" => "string",
        "accompanying_adults" => "\Blackbaud\SKY\School\Components\UserBaseReadModel[]",
        "is_rescheduled" => "bool",
        "did_not_show" => "bool",
        "comment" => "string",
    ];
}
