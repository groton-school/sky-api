<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class StatusInfoModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "imsx_codeMajor" => "string",
        "imsx_severity" => "string",
        "imsx_messageRefIdentifier" => "string",
        "imsx_operationRefIdentifier" => "string",
        "imsx_description" => "string",
        "imsx_codeMinor" => "string",
    ];
}
