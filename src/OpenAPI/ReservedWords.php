<?php

namespace GrotonSchool\Blackbaud\OpenAPI;

use sspat\ReservedWords\ReservedWords as sspatReservedWords;

class ReservedWords
{
    private static sspatReservedWords $reserved;

    public static function init(): void
    {
        ReservedWords::$reserved = new sspatReservedWords();
    }

    public static function filter(string $value): string
    {
        if (ReservedWords::$reserved->isReserved($value)) {
            return ReservedWords::filter("_$value");
        }
        return $value;
    }

    public static function divide(string $value, string $separator = "/"): string
    {
        return preg_replace("/[^a-zA-Z0-9_]+/", $separator, $value);
    }
}
