<?php

namespace Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AdmissionsCheckListCollection;

/**
 * @api
 */
class checklists extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/checklists";

    /**
     * Returns a collection of admissions checklists.
     *
     * Use the optional ```search_text``` to apply a case-insensitive search
     * against check lists "name".
     *
     * Use the optional ```inactive``` to return only inactive checklists
     * (default is both).
     *
     * Requires the following role in the Education Management system:
     *
     * - Admissions Manager
     *
     * @param array{search_text?: string, inactive?: bool} $params An
     *   associative array
     *     - search_text: (Optional) Applies a case-insensitive search against
     *   check lists "name".
     *     - inactive: (Optional) flag to return only inactive checklists
     *   (default is both).
     *
     * @return \Blackbaud\SKY\School\Objects\AdmissionsCheckListCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new AdmissionsCheckListCollection($this->send("get", [], ["search_text" => $params["search_text"],
        "inactive" => $params["inactive"]]));
    }
}
