<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $category_description The category that the excuse
 *   associated with
 * @property ?int $category_id The ID of category that the excuse associated
 *   with
 * @property ?int $excuse_type_id The ID of the excuse type
 * @property ?string $excuse_description The description of the excuse type
 * @property ?bool $use_in_calculations The Use In Calculations flag
 * @property null|"Present"|"Excused"|"Unexcused" $excused The
 *   Excused/Unexecused status
 * @property null|"NA"|"FullDay"|"HalfDay" $duration The Full Day/Half day
 *   status
 * @property null|"Present"|"Absence"|"Tardy"|"Virtual" $attendance_type The
 *   attendance type
 *
 * @api
 */
class ExcusedTypes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category_description" => "string",
        "category_id" => "int",
        "excuse_type_id" => "int",
        "excuse_description" => "string",
        "use_in_calculations" => "bool",
        "excused" => "string",
        "duration" => "string",
        "attendance_type" => "string",
    ];
}
