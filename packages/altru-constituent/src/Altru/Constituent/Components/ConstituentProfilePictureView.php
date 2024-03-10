<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewConstituentProfilePicture
 *
 * @property string $picture The picture.
 * @property string $title The title.
 * @property string $first_name The first name.
 * @property string $middle_name The middle name.
 * @property string $key_name The last name.
 * @property string $suffix The suffix.
 * @property string $nick_name The nickname.
 * @property string $maiden_name The maiden.
 * @property bool $gives_anonymously Indicates whether gives anonymously.
 *
 * @api
 */
class ConstituentProfilePictureView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "picture" => "string",
        "title" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "key_name" => "string",
        "suffix" => "string",
        "nick_name" => "string",
        "maiden_name" => "string",
        "gives_anonymously" => "bool",
    ];
}
