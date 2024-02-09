<?php

namespace GrotonSchool\Blackbaud\OpenAPI;

use GrotonSchool\Blackbaud\BlackbaudException;

class OpenAPIException extends BlackbaudException
{
    public const TYPE_ERROR = 1001;
    public const VERSION_ERROR = 1002;
    public const DEFINITION_ERROR = 1003;
}
