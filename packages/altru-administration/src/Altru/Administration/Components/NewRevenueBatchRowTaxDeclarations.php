<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowTaxDeclarations
 *
 * @property string $id id
 * @property string $charity_claim_reference_number The reference number. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/9a4fcffc-0366-4971-882e-0c4f7836466a.
 * @property string $declaration_made made
 * @property string $declaration_starts start date
 * @property string $declaration_ends end date
 * @property string $declaration_indicator The indicator. Available values are
 *   *written*, *oral*, *internet*
 * @property string $declaration_source The source. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/declarationsourcecode/entries
 * @property string $pays_tax The pays tax. Available values are *no*, *yes*,
 *   *unknown*
 *
 * @api
 */
class NewRevenueBatchRowTaxDeclarations extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "charity_claim_reference_number" => "string",
        "declaration_made" => "string",
        "declaration_starts" => "string",
        "declaration_ends" => "string",
        "declaration_indicator" => "string",
        "declaration_source" => "string",
        "pays_tax" => "string",
    ];
}
