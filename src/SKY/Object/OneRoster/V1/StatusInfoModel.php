<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $imsx_codeMajor
 * @property string|null $imsx_severity
 * @property string|null $imsx_messageRefIdentifier
 * @property string|null $imsx_operationRefIdentifier
 * @property string|null $imsx_description
 * @property string|null $imsx_codeMinor
 * @api
 */
class StatusInfoModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["imsx_codeMajor","imsx_severity","imsx_messageRefIdentifier","imsx_operationRefIdentifier","imsx_description","imsx_codeMinor"];
}
