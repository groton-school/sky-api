<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Results input model
 *
 * @property ResultModelSvc $result Results model
 * @api
 */
class ResultInputModelSvc extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["result"];
}
