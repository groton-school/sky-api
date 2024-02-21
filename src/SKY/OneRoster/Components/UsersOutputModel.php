<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ORUserModel[] $users
 * @property \Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class UsersOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "users",
        "statusInfoSet",
    ];
}
