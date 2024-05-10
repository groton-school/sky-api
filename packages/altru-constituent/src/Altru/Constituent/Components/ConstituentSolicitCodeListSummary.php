<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentSolicitCodes
 *
 * @property string $id The ID.
 * @property string $description The code.
 * @property string $site The site.
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $comments The comments.
 * @property bool $expired Indicates whether expired.
 * @property bool $editable Indicates whether editable.
 * @property string $solicit_code_id The solicit code ID.
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
