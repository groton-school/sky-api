<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $imsx_codeMajor 
 * @property string | null $imsx_severity 
 * @property string | null $imsx_messageRefIdentifier 
 * @property string | null $imsx_operationRefIdentifier 
 * @property string | null $imsx_description 
 * @property string | null $imsx_codeMinor 
 *
 * @api
 */
class StatusInfoModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["imsx_codeMajor","imsx_severity","imsx_messageRefIdentifier","imsx_operationRefIdentifier","imsx_description","imsx_codeMinor"];
}
