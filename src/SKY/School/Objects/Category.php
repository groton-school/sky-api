<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * News Category Model
 *
 * @property int | null $id The Id of the news category
 * @property string | null $name The name of the news category
 * @property string | null $content_type The type of content type the news
 *   comes from
 * @property bool | null $primary Set to true if the new category is the
 *   primary source of the news item
 *
 * @api
 */
class Category extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","content_type","primary"];
}
