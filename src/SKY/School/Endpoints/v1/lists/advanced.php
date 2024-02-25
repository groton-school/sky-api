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
     * Returns a collection of results from a basic or advanced list.<br
     * /><b>Note</b>: The requested list must have access permissions enabled
     * for a role listed below or the user requesting the list needs read
     * permission to that list.<br />
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Page Manager</li><li>Content
     * Editor</li><li>Teacher</li><li>Coach</li><li>Community Group
     * Manager</li><li>Mentor Manager</li><li>Alumni Group
     * Manager</li><li>Athletic Group Manager</li><li>Academic Group
     * Manager</li><li>System Group Manager</li><li>Content
     * Manager</li><li>Community Group Owner</li><li>Dorm Group
     * Manager</li><li>Activity Group Manager</li><li>Advisory Group
     * Manager</li><li>Advisor</li><li>Dorm Supervisor</li><li>Activity
     * Leader</li><li>Pending Teacher</li><li>Pending Advisor</li><li>Pending
     * Dorm Supervisor</li><li>Pending Activity Leader</li><li>Platform
     * Manager</li><li>SkyApi Data Sync</li></ul>
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
    public function get(array $params): ListResult
    {
        assert(isset($params['list_id']), new ArgumentException("Parameter `list_id` is required"));
        assert(isset($params['page']), new ArgumentException("Parameter `page` is required"));
        assert(isset($params['page_size']), new ArgumentException("Parameter `page_size` is required"));

        return new ListResult($this->send("get", ["{list_id}" => $params['list_id']], ["page" => $page,
        "page_size" => $page_size]));
    }
}
