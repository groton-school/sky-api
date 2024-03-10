<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAttribute
 *
 * @property string $id The id.
 * @property string $attribute_category_id The attributecategoryid.
 * @property string $category The category.
 * @property string $value The value.
 * @property string $attribute_key The attributekey.
 * @property string $comment The comment.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $attribute_group The attribute group.
 *
 * @api
 */
class ConstituentAttributeListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "attribute_category_id" => "string",
        "category" => "string",
        "value" => "string",
        "attribute_key" => "string",
        "comment" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "attribute_group" => "string",
    ];
}
