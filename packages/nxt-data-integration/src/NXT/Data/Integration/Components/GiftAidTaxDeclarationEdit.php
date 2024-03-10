<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.ConstituentTaxDeclaration table in Raiser's Edge.
 *
 * @property ?string $import_id The import id.
 * @property "No"|"Yes"|"Unknown" $constituent_pays_tax Constituent pays tax
 *   status (Yes, No, Unknown).
 * @property ?string $declaration_made Date the declaration was made.
 * @property ?string $confirmation_sent Date the confirmation was sent.
 * @property ?string $confirmation_returned Date the confirmation was
 *   returned.
 * @property string $declaration_starts Date the declaration starts.
 * @property ?string $declaration_ends Date the declaration ends.
 * @property ?string $tax_notes Comments on the declaration.
 * @property ?string $tax_payer_status Tax payer status.
 * @property ?string $declaration_indicator Declaration indicator.
 * @property ?string $declaration_source Declaration source.
 * @property ?int $sequence The numeric sequence associated with the tax
 *   declaration.
 *
 * @api
 */
class GiftAidTaxDeclarationEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "import_id" => "string",
        "constituent_pays_tax" => "string",
        "declaration_made" => "string",
        "confirmation_sent" => "string",
        "confirmation_returned" => "string",
        "declaration_starts" => "string",
        "declaration_ends" => "string",
        "tax_notes" => "string",
        "tax_payer_status" => "string",
        "declaration_indicator" => "string",
        "declaration_source" => "string",
        "sequence" => "int",
    ];
}
