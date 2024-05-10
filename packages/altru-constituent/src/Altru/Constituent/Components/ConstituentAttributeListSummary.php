<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAttributes
 *
 * @property string $id The ID.
 * @property string $attribute_category_id The attributecategoryid.
 * @property string $category The category.
 * @property string $value The value.
 * @property string $attribute_key The attributekey.
 * @property string $comment The comment.
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
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
