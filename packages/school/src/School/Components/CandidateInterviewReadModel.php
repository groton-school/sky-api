<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with candidate interview information
 *
 * @property ?int $id The ID of the candidate interview
 * @property \Blackbaud\SKY\School\Components\SourceModel $type
 * @property ?string $start_time The start time of the interview
 * @property ?string $end_time The end time of the interview
 * @property \Blackbaud\SKY\School\Components\UserBaseReadModel $interviewer
 *   User base read model
 * @property ?string $interviewer_other Information for non-user interviewer
 * @property ?\Blackbaud\SKY\School\Components\UserBaseReadModel[]
 *   $accompanying_adults An array of accompanying adult objects
 * @property ?int $rating The rating of the interview
 * @property ?bool $is_rescheduled True if interview was rescheduled
 * @property ?bool $did_not_show True if candidate did not show for interview
 * @property ?string $comment The comment for the interview
 *
 * @api
 */
class CandidateInterviewReadModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "type" => "\Blackbaud\SKY\School\Components\SourceModel",
        "start_time" => "string",
        "end_time" => "string",
        "interviewer" => "\Blackbaud\SKY\School\Components\UserBaseReadModel",
        "interviewer_other" => "string",
        "accompanying_adults" => "\Blackbaud\SKY\School\Components\UserBaseReadModel[]",
        "rating" => "int",
        "is_rescheduled" => "bool",
        "did_not_show" => "bool",
        "comment" => "string",
    ];
}
