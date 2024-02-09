<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel;

use Exception;

class ObjectModelException extends Exception
{
    public const PROPERTY_ERROR = 1;
    public const TYPE_ERROR = 2;
}
