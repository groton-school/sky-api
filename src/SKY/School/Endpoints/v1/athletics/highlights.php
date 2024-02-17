<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\Highlight;

/**
 * @api
 */
class highlights extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/highlights/{highlight_id}";

    /**
     * Returns an athletic game's highlights for the specified
     * ```highlight_id```.
     *
     * This ID can be obtained via the GET athletics schedules endpoint for a
     * game if highlights exist for that game.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Page Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{highlight_id: int} $params An associative array
     *     - highlight_id: Format - int32. ID of the highlight to be returned.
     *
     * @return \Blackbaud\SKY\School\Objects\Highlight
     *
     * @api
     */
    public function get(array $params)
    {
        return new Highlight($this->send("get", ["{highlight_id}" => $params["highlight_id"]], []));
    }
}
