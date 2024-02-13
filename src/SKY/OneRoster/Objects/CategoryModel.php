<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $title 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class CategoryModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["title","sourcedId","status","dateLastModified","metadata"];
}
