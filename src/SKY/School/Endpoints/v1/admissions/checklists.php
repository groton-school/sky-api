<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AdmissionsCheckListCollection;

/**
 * @api
 */
class Checklists extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/admissions/checklists";

    /**
     * Returns a collection of admissions checklists.<br></br>
     *
     * Use the optional ```search_text``` to apply a case-insensitive search
     * against check lists "name".<br />
     *
     * Use the optional ```inactive``` to return only inactive checklists
     * (default is both).<br />
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Admissions Manager</li></ul>
     *
     * @param array{search_text: string, inactive: bool} $params An
     *   associative array
     *     - search_text: Applies a case-insensitive search against check
     *   lists "name".
     *     - inactive: flag to return only inactive checklists (default is
     *   both).
     *
     * @return \Blackbaud\SKY\School\Components\AdmissionsCheckListCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): AdmissionsCheckListCollection
    {
        assert(isset($params['search_text']), new ArgumentException("Parameter `search_text` is required"));
        assert(isset($params['inactive']), new ArgumentException("Parameter `inactive` is required"));

        return new AdmissionsCheckListCollection($this->send("get", [], ["search_text" => $search_text,
        "inactive" => $inactive]));
    }
}
