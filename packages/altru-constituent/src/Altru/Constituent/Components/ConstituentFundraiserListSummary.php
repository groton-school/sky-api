<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentFundraiser
 *
 * @property string $id The id.
 * @property string $name The name.
 * @property int $prospect_plans_as_primary_manager The prospect plans (as
 *   primary manager).
 * @property string $prospect_plans_relative_to_average The prospect plans
 *   (relative to average).
 * @property int $planned_steps_next_7_days The planned steps (next 7 days).
 * @property int $planned_steps_next_30_days The planned steps (next 30 days).
 * @property int $completed_steps_last_7_days The completed steps (last 7
 *   days).
 * @property int $completed_steps_last_30_days The completed steps (last 30
 *   days).
 *
 * @api
 */
class ConstituentFundraiserListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "name" => "string",
        "prospect_plans_as_primary_manager" => "int",
        "prospect_plans_relative_to_average" => "string",
        "planned_steps_next_7_days" => "int",
        "planned_steps_next_30_days" => "int",
        "completed_steps_last_7_days" => "int",
        "completed_steps_last_30_days" => "int",
    ];
}
