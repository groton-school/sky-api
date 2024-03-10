<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Lists;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ListResult;

/**
 * @api
 */
class Advanced extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/lists/advanced/{list_id}";

    /**
     * Returns a collection of results from a basic or advanced list.
     *
     * **Note**: The requested list must have access permissions enabled for a
     * role listed below or the user requesting the list needs read permission
     * to that list.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Page Manager
     *
     * - Content Editor
     *
     * - Teacher
     *
     * - Coach
     *
     * - Community Group Manager
     *
     * - Mentor Manager
     *
     * - Alumni Group Manager
     *
     * - Athletic Group Manager
     *
     * - Academic Group Manager
     *
     * - System Group Manager
     *
     * - Content Manager
     *
     * - Community Group Owner
     *
     * - Dorm Group Manager
     *
     * - Activity Group Manager
     *
     * - Advisory Group Manager
     *
     * - Advisor
     *
     * - Dorm Supervisor
     *
     * - Activity Leader
     *
     * - Pending Teacher
     *
     * - Pending Advisor
     *
     * - Pending Dorm Supervisor
     *
     * - Pending Activity Leader
     *
     * - Platform Manager
     *
     * - SkyApi Data Sync
     *
     * @param array{list_id: int, page: int, page_size: int} $params An
     *   associative array
     *     - list_id: Format - int32. The ID of the list. To learn how to find
     *   the list ID, see [KB article
     *   108336](https://kb.blackbaud.com/articles/Article/108336).
     *     - page: Format - int32. The number of the page to return. Defaults
     *   to **1**.
     *     - page_size: Format - int32. Number of rows to return per page.
     *   Default is 1000. Maximum allowed is 1000.
     *
     * @return \Blackbaud\SKY\School\Components\ListResult Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByListId(array $params): ListResult
    {
        assert(isset($params['list_id']), new ArgumentException("Parameter `list_id` is required"));
        assert(isset($params['page']), new ArgumentException("Parameter `page` is required"));
        assert(isset($params['page_size']), new ArgumentException("Parameter `page_size` is required"));

        return new ListResult($this->send("get", ["{list_id}" => $params['list_id']], ["page" => $params['page'],
        "page_size" => $params['page_size']]));
    }
}
