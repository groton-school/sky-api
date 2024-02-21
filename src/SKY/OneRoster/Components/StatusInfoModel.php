<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $imsx_codeMajor
 * @property ?string $imsx_severity
 * @property ?string $imsx_messageRefIdentifier
 * @property ?string $imsx_operationRefIdentifier
 * @property ?string $imsx_description
 * @property ?string $imsx_codeMinor
 *
 * @api
 */
class StatusInfoModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "imsx_codeMajor",
        "imsx_severity",
        "imsx_messageRefIdentifier",
        "imsx_operationRefIdentifier",
        "imsx_description",
        "imsx_codeMinor",
    ];
}
