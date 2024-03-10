<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchConstituent
 *
 * @property string $id The id.
 * @property string $lookup_id The lookup id.
 * @property string $sort_constituent_name The name.
 * @property string $constituenttype The constituent type.
 * @property string $address The address.
 * @property string $city The city.
 * @property string $state The state.
 * @property string $post_code The zip/postal code.
 * @property string $country_id The country.
 * @property bool $gives_anonymously Indicates whether gives anonymously.
 * @property int $classof The primary class year.
 * @property string $primarybusiness The primary business.
 * @property bool $organization Indicates whether is organization.
 * @property string $name The name.
 * @property string $email_address The email address.
 * @property bool $group Indicates whether is group.
 * @property bool $household Indicates whether is household.
 * @property string $middle_name The middle name.
 * @property string $suffix_code_id The suffix.
 * @property string $phone The phone.
 * @property string $prospectmanager The prospect manager.
 *
 * @api
 */
class ConstituentSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "lookup_id" => "string",
        "sort_constituent_name" => "string",
        "constituenttype" => "string",
        "address" => "string",
        "city" => "string",
        "state" => "string",
        "post_code" => "string",
        "country_id" => "string",
        "gives_anonymously" => "bool",
        "classof" => "int",
        "primarybusiness" => "string",
        "organization" => "bool",
        "name" => "string",
        "email_address" => "string",
        "group" => "bool",
        "household" => "bool",
        "middle_name" => "string",
        "suffix_code_id" => "string",
        "phone" => "string",
        "prospectmanager" => "string",
    ];
}
