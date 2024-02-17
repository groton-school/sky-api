<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Objects\ORUserModel $user
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] $statusInfoSet
 *
 * @api
 */
class UserOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "user",
        "statusInfoSet",
    ];
}
