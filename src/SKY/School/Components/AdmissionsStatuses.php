<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Admissions Checklist
 *
 * @property ?int $id Identifier for a given status
 * @property ?string $description Name of the status
 * @property ?int $next_status_id Next Status Id
 *
 * @api
 */
class AdmissionsStatuses extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "next_status_id" => "int",
    ];
}
