<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentSolicitCode
 *
 * @property string $id The id.
 * @property string $description The code.
 * @property string $site The site.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $comments The comments.
 * @property bool $expired Indicates whether expired.
 * @property bool $editable Indicates whether editable.
 * @property string $solicit_code_id The solicit code id.
 *
 * @api
 */
class ConstituentSolicitCodeListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "description" => "string",
        "site" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "comments" => "string",
        "expired" => "bool",
        "editable" => "bool",
        "solicit_code_id" => "string",
    ];
}
