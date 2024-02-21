<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * OfferingType Model
 *
 * @property int $id The ID of an offering type
 * @property ?string $description The description of an offering type
 *
 * @api
 */
class OfferingType extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "description",
    ];
}
