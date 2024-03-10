<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * RE7 Country record read class from the dbo.COUNTRY\_CODES table in Raiser's
 * Edge.
 *
 * @property int $id The unique identifier for the country in the
 *   COUNTRY\_CODES table.
 * @property ?string $name The name of the country; corresponds to the
 *   LONGDESCRIPTION in dbo.TABLEENTRIES.
 * @property ?string $abbreviation The user-defined abbreviation for the
 *   country; corresponds to the SHORTDESCRIPTION in dbo.TABLEENTRIES.
 * @property ?int $currency_type_id The identifier for the country's currency
 *   type; corresponds to TYPE in dbo.COUNTRY\_CODES.
 * @property ?string $currency_type The currency type used by the country;
 *   corresponds to the LONGDESCRIPTION in dbo.TABLEENTRIES.
 * @property ?string $thousand_separator The thousand separator character used
 *   by the country.
 * @property ?float $exchange_rate The country's currency exchange rate.
 * @property ?string $decimal_separator The the decimal separator character
 *   used by the country.
 * @property int $decimal_digits The number of digits following a decimal.
 * @property ?string $currency_symbol The currency symbol used by the country.
 * @property "Before"|"After"|"BeforeWithSpace"|"AfterWithSpace"
 *   $currency_placement_id The value used to determine where the country's
 *   currency symbol is placed.
 * @property bool $leading_zero Value used to indicate whether a leading zero
 *   should be placed when displaying currency.
 * @property "ISOCountry_None"|"ISOCountry_UnitedStates"|"ISOCountry_UnitedKingdom"|"ISOCountry_Canada"|"ISOCountry_Australia"|"ISOCountry_NewZealand"|"ISOCountry_Afghanistan"|"ISOCountry_AlandIslands"|"ISOCountry_Albania"|"ISOCountry_Algeria"|"ISOCountry_AmericanSamoa"|"ISOCountry_Andorra"|"ISOCountry_Angola"|"ISOCountry_Anguilla"|"ISOCountry_Antarctica"|"ISOCountry_AntiguaAndBarbuda"|"ISOCountry_Argentina"|"ISOCountry_Armenia"|"ISOCountry_Aruba"|"ISOCountry_Austria"|"ISOCountry_Azerbaijan"|"ISOCountry_Bahamas"|"ISOCountry_Bahrain"|"ISOCountry_Bangladesh"|"ISOCountry_Barbados"|"ISOCountry_Belarus"|"ISOCountry_Belgium"|"ISOCountry_Belize"|"ISOCountry_Benin"|"ISOCountry_Bermuda"|"ISOCountry_Bhutan"|"ISOCountry_Bolivia"|"ISOCountry_BosniaAndHerzegovina"|"ISOCountry_Botswana"|"ISOCountry_BouvetIsland"|"ISOCountry_Brazil"|"ISOCountry_BritishIndianOceanTerritory"|"ISOCountry_BruneiDarussalam"|"ISOCountry_Bulgaria"|"ISOCountry_BurkinaFaso"|"ISOCountry_Burundi"|"ISOCountry_Cambodia"|"ISOCountry_Cameroon"|"ISOCountry_CapeVerde"|"ISOCountry_CaymanIslands"|"ISOCountry_CentralAfricanRepublic"|"ISOCountry_Chad"|"ISOCountry_Chile"|"ISOCountry_China"|"ISOCountry_ChristmasIsland"|"ISOCountry_CocosIslands"|"ISOCountry_Colombia"|"ISOCountry_Comoros"|"ISOCountry_Congo"|"ISOCountry_DemocraticRepublicOfCongo"|"ISOCountry_CookIslands"|"ISOCountry_CostaRica"|"ISOCountry_CoteDivoire"|"ISOCountry_Croatia"|"ISOCountry_Cuba"|"ISOCountry_Cyprus"|"ISOCountry_CzechRepublic"|"ISOCountry_Denmark"|"ISOCountry_Djibouti"|"ISOCountry_Dominica"|"ISOCountry_DominicanRepublic"|"ISOCountry_Ecuador"|"ISOCountry_Egypt"|"ISOCountry_ElSalvador"|"ISOCountry_EquatorialGuinea"|"ISOCountry_Eritrea"|"ISOCountry_Estonia"|"ISOCountry_Ethiopia"|"ISOCountry_FalklandIslands"|"ISOCountry_FaroeIslands"|"ISOCountry_Fiji"|"ISOCountry_Finland"|"ISOCountry_France"|"ISOCountry_FrenchGuiana"|"ISOCountry_FrenchPolynesia"|"ISOCountry_FrenchSouthernTerritories"|"ISOCountry_Gabon"|"ISOCountry_Gambia"|"ISOCountry_Georgia"|"ISOCountry_Germany"|"ISOCountry_Ghana"|"ISOCountry_Gibraltar"|"ISOCountry_Greece"|"ISOCountry_Greenland"|"ISOCountry_Grenada"|"ISOCountry_Guadeloupe"|"ISOCountry_Guam"|"ISOCountry_Guatemala"|"ISOCountry_Guernsey"|"ISOCountry_Guinea"|"ISOCountry_GuineaBissau"|"ISOCountry_Guyana"|"ISOCountry_Haiti"|"ISOCountry_HeardIslandAndMcDonaldsIsland"|"ISOCountry_HolySee_VaticanCity"|"ISOCountry_Honduras"|"ISOCountry_HongKong"|"ISOCountry_Hungary"|"ISOCountry_Iceland"|"ISOCountry_India"|"ISOCountry_Indonesia"|"ISOCountry_Iran"|"ISOCountry_Iraq"|"ISOCountry_Ireland"|"ISOCountry_IsleOfMan"|"ISOCountry_Israel"|"ISOCountry_Italy"|"ISOCountry_Jamaica"|"ISOCountry_Japan"|"ISOCountry_Jersey"|"ISOCountry_Jordan"|"ISOCountry_Kazakhstan"|"ISOCountry_Kenya"|"ISOCountry_Kiribati"|"ISOCountry_DemocraticRepublicOfKorea"|"ISOCountry_RepublicOfKorea"|"ISOCountry_Kuwait"|"ISOCountry_Kyrgyzstan"|"ISOCountry_Lao"|"ISOCountry_Latvia"|"ISOCountry_Lebanon"|"ISOCountry_Lesotho"|"ISOCountry_Liberia"|"ISOCountry_LibyanArabJamahiriya"|"ISOCountry_Liechtenstein"|"ISOCountry_Lithuania"|"ISOCountry_Luxembourg"|"ISOCountry_Macao"|"ISOCountry_Macedonia"|"ISOCountry_Madagascar"|"ISOCountry_Malawi"|"ISOCountry_Malaysia"|"ISOCountry_Maldives"|"ISOCountry_Mali"|"ISOCountry_Malta"|"ISOCountry_MarshallIslands"|"ISOCountry_Martinique"|"ISOCountry_Mauritania"|"ISOCountry_Mauritius"|"ISOCountry_Mayotte"|"ISOCountry_Mexico"|"ISOCountry_Micronesia"|"ISOCountry_Moldova"|"ISOCountry_Monaco"|"ISOCountry_Mongolia"|"ISOCountry_Montenegro"|"ISOCountry_Montserrat"|"ISOCountry_Morocco"|"ISOCountry_Mozambique"|"ISOCountry_Myanmar"|"ISOCountry_Namibia"|"ISOCountry_Nauru"|"ISOCountry_Nepal"|"ISOCountry_Netherlands"|"ISOCountry_NetherlandsAntilles"|"ISOCountry_NewCaledonia"|"ISOCountry_Nicaragua"|"ISOCountry_Niger"|"ISOCountry_Nigeria"|"ISOCountry_Niue"|"ISOCountry_NorfolkIsland"|"ISOCountry_NorthernMarianaIslands"|"ISOCountry_Norway"|"ISOCountry_Oman"|"ISOCountry_Pakistan"|"ISOCountry_Palau"|"ISOCountry_PalestinianTerritory"|"ISOCountry_Panama"|"ISOCountry_PapuaNewGuinea"|"ISOCountry_Paraguay"|"ISOCountry_Peru"|"ISOCountry_Philippines"|"ISOCountry_Pitcairn"|"ISOCountry_Poland"|"ISOCountry_Portugal"|"ISOCountry_PuertoRico"|"ISOCountry_Qatar"|"ISOCountry_Reunion"|"ISOCountry_Romania"|"ISOCountry_RussianFederation"|"ISOCountry_Rwanda"|"ISOCountry_SaintBarthelemy"|"ISOCountry_SaintHelena"|"ISOCountry_SaintKittsAndNevis"|"ISOCountry_SaintLucia"|"ISOCountry_SaintMartin"|"ISOCountry_SaintPierreAndMiquelon"|"ISOCountry_SaintVincentAndTheGrenadines"|"ISOCountry_Somoa"|"ISOCountry_SanMarino"|"ISOCountry_SaoTomeAndPrincipe"|"ISOCountry_SaudiArabia"|"ISOCountry_Senegal"|"ISOCountry_Serbia"|"ISOCountry_Seychelles"|"ISOCountry_SierraLeone"|"ISOCountry_Singapore"|"ISOCountry_Slovakia"|"ISOCountry_Slovenia"|"ISOCountry_SolomonIslands"|"ISOCountry_Somalia"|"ISOCountry_SouthAfrica"|"ISOCountry_SouthGeorgiaAndSouthSandwichIslands"|"ISOCountry_Spain"|"ISOCountry_SriLanka"|"ISOCountry_Sudan"|"ISOCountry_Suriname"|"ISOCountry_SvalbardAndJanMayen"|"ISOCountry_Swaziland"|"ISOCountry_Sweden"|"ISOCountry_Switzerland"|"ISOCountry_Syria"|"ISOCountry_Taiwan"|"ISOCountry_Tajikistan"|"ISOCountry_Tanzania"|"ISOCountry_Thailand"|"ISOCountry_TimorLeste"|"ISOCountry_Togo"|"ISOCountry_Tokelau"|"ISOCountry_Tonga"|"ISOCountry_TrinidadAndTobago"|"ISOCountry_Tunisia"|"ISOCountry_Turkey"|"ISOCountry_Turkmenistan"|"ISOCountry_TurksAndCaicosIslands"|"ISOCountry_Tuvalu"|"ISOCountry_Uganda"|"ISOCountry_Ukraine"|"ISOCountry_UnitedArabEmirates"|"ISOCountry_UnitedStatesMinorOutlyingIslands"|"ISOCountry_Uruguay"|"ISOCountry_Uzbekistan"|"ISOCountry_Vanuatu"|"ISOCountry_VaticanCity"|"ISOCountry_Venezuela"|"ISOCountry_VietNam"|"ISOCountry_BritishVirginIslands"|"ISOCountry_USVirginIslands"|"ISOCountry_WallisAndFutuna"|"ISOCountry_WesternSahara"|"ISOCountry_Yemen"|"ISOCountry_Zambia"|"ISOCountry_Zimbabwe"|"ISOCountry_SintMaarten"
 *   $iso_code The country's ISO code.
 * @property "UnitedStates"|"UnitedKingdom"|"Canada"|"Australia"|"NewZealand"
 *   $label_format_country Value used to indicate the label format for the
 *   country.
 * @property ?int $country_code_id
 *
 * @api
 */
class Country extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "abbreviation" => "string",
        "currency_type_id" => "int",
        "currency_type" => "string",
        "thousand_separator" => "string",
        "exchange_rate" => "float",
        "decimal_separator" => "string",
        "decimal_digits" => "int",
        "currency_symbol" => "string",
        "currency_placement_id" => "string",
        "leading_zero" => "bool",
        "iso_code" => "string",
        "label_format_country" => "string",
        "country_code_id" => "int",
    ];
}
