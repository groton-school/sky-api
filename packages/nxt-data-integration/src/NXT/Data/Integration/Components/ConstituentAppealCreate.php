<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Contains the fields for creating a record in the dbo.CONSTITUENT\_APPEAL
 * table in Raiser's Edge.
 *
 * @property int $constituent_id The immutable system record ID of the
 *   constituent associated with the constituent appeal.
 * @property ?string $import_id The import ID of the constituent appeal.
 * @property string $appeal_description The appeal description; used to look
 *   up the appeal record ID.
 * @property ?string $package_description The package description; used to
 *   look up the package record ID.
 * @property ?string $response_description The long description of the
 *   response for the constituent appeal.
 * @property ?string $comments The comments associated with the constituent
 *   appeal.
 * @property ?string $appeal_date The date for the constituent appeal.
 * @property ?int $mailing_id The mailing ID of the constituent appeal.
 * @property ?string $market_finder_number The market finder number associated
 *   with the constituent appeal.
 * @property ?string $marketing_segment The marketing segment associated with
 *   the constituent appeal.
 * @property ?string $marketing_source_code The marketing source code
 *   associated with the constituent appeal.
 *
 * @api
 */
class ConstituentAppealCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "int",
        "import_id" => "string",
        "appeal_description" => "string",
        "package_description" => "string",
        "response_description" => "string",
        "comments" => "string",
        "appeal_date" => "string",
        "mailing_id" => "int",
        "market_finder_number" => "string",
        "marketing_segment" => "string",
        "marketing_source_code" => "string",
    ];
}
