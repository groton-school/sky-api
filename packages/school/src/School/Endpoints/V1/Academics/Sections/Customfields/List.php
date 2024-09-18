<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Customfields;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;

/**
 * @api
 */
class List_ extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/customfields/list";

    /**
     * Add custom field data to an academic section
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic group manager
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{section_id: int} $params An associative array
     *     - section_id: Format - int32. The Id of the section to create a
     *   custom field for
     * @param \Blackbaud\SKY\School\Components\SectionAdminCustomFieldCreate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be created for the section.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToSectionId(array $params, array $requestBody): int
    {
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['section_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Update the custom field data for an academic section
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic group manager
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{section_id: int} $params An associative array
     *     - section_id: Format - int32. The Id of the section to update a
     *   custom field for
     * @param \Blackbaud\SKY\School\Components\SectionAdminCustomFieldUpdate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be updated for the section.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnSectionId(array $params, array $requestBody): int
    {
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['section_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
