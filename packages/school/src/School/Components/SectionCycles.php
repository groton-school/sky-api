<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $section_id The ID of the section
 * @property ?string $course_title The name of the course
 * @property ?string $section_identifier The section identifier
 * @property ?string $block_name Name of the block to which this section
 *   belongs
 * @property ?string $course_code The course code
 * @property ?\Blackbaud\SKY\School\Components\Cycle[] $cycles The collection
 *   of cycles for the section
 *
 * @api
 */
class SectionCycles extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_id" => "int",
        "course_title" => "string",
        "section_identifier" => "string",
        "block_name" => "string",
        "course_code" => "string",
        "cycles" => "\Blackbaud\SKY\School\Components\Cycle[]",
    ];
}
