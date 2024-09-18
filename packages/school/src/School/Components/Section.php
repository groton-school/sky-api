<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with section information
 *
 * @property ?int $id The ID of the section. This is the the class ID for
 *   academics, team ID for athletics, building\_id for dorms, etc. dependent on
 *   offering type
 * @property ?string $name The name of the roster group
 * @property ?string $identifier The section identifier
 * @property \Blackbaud\SKY\School\Components\OfferingModel $offering An
 *   object with offering information
 * @property \Blackbaud\SKY\School\Components\Duration $duration An object
 *   describing the term or season for the section
 * @property \Blackbaud\SKY\School\Components\Year $school_year An object with
 *   school year information
 * @property ?int $lead_section_id The section id for the lead section (i.e.
 *   first term) of the class.
 * @property ?string $modified The last modified date for the section
 * @property \Blackbaud\SKY\School\Components\ProfilePictureUrls $photo An
 *   object with profile photo and thumbnail
 *
 * @api
 */
class Section extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "identifier" => "string",
        "offering" => "\Blackbaud\SKY\School\Components\OfferingModel",
        "duration" => "\Blackbaud\SKY\School\Components\Duration",
        "school_year" => "\Blackbaud\SKY\School\Components\Year",
        "lead_section_id" => "int",
        "modified" => "string",
        "photo" => "\Blackbaud\SKY\School\Components\ProfilePictureUrls",
    ];
}
