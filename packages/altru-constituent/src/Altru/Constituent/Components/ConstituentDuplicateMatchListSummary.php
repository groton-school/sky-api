<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentDuplicateMatch
 *
 * @property string $constituent_id The constituent id.
 * @property int $match_score The match score.
 *
 * @api
 */
class ConstituentDuplicateMatchListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "match_score" => "int",
    ];
}
