<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewCurrencyConfiguration
 *
 * @property string $name The name.
 * @property string $iso_4217 The iso code.
 * @property int $decimal_digits The decimal digits.
 * @property string $currency_symbol The currency symbol.
 * @property string $rounding_type The rounding type. Available values are
 *   *half rounds away from zero*, *half rounds to nearest even number*, *round
 *   1 digit to nearest multiple of 5*, *round 2 digits to the nearest multiple
 *   of 50*
 * @property string $symbol_display_setting The display setting. Available
 *   values are *always display iso code*, *always display symbol*, *display
 *   symbol to users in regions where this currency is the default; display iso
 *   code otherwise*
 *
 * @api
 */
class CurrencyConfigurationView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "iso_4217" => "string",
        "decimal_digits" => "int",
        "currency_symbol" => "string",
        "rounding_type" => "string",
        "symbol_display_setting" => "string",
    ];
}
