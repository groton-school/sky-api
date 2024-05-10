<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListCurrencies
 *
 * @property string $id The ID.
 * @property string $name The currency.
 * @property string $iso_4217 The iso code.
 * @property string $locale The locale.
 * @property int $decimal_digits The decimal digits.
 * @property string $currency_symbol The currency symbol.
 * @property string $rounding_type The rounding.
 * @property bool $active Indicates whether active.
 * @property bool $organization_currency Indicates whether organization
 *   currency.
 *
 * @api
 */
class CurrencyListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "name" => "string",
        "iso_4217" => "string",
        "locale" => "string",
        "decimal_digits" => "int",
        "currency_symbol" => "string",
        "rounding_type" => "string",
        "active" => "bool",
        "organization_currency" => "bool",
    ];
}
