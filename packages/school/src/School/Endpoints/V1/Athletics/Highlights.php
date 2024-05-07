<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\Highlight;

/**
 * @api
 */
class Highlights extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/highlights/{highlight_id}";

    /**
     * Returns an athletic game's highlights for the specified
     * ```highlight\_id```.
     *
     *  This ID can be obtained via the GET athletics schedules endpoint for a
     * game if highlights exist for that game.
     *
     *  Requires at least one of the following roles in the Education
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
     * @return \Blackbaud\SKY\School\Components\Highlight Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByHighlightId(array $params): Highlight
    {
        assert(isset($params['highlight_id']), new ArgumentException("Parameter `highlight_id` is required"));

        return new Highlight($this->send("get", ["highlight_id" => $params['highlight_id']], []));
    }
}
