<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserRead;
use Blackbaud\SKY\School\Objects\UserReadCollection;

/**
 * @api
 */
class users extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}";

    /**
     * Returns a paginated collection of users, limited to 100 users per page.
     *
     *
     * Use the record number as the ```marker``` value to return the next set
     * of results. For example: ```marker=101``` will return the second set of
     * results.
     *
     * Results dependant on the directory settings of each user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Billing Clerk
     *
     * - Password Manager
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * @param array{roles: string, first_name?: string, last_name?: string,
     *   email?: string, maiden_name?: string, grad_year?: string,
     *   end_grad_year?: string, marker?: int} $params An associative array
     *     - roles: Comma delimited list of role IDs to get users for.
     *     - first_name: (Optional) Filter results by first name.
     *     - last_name: (Optional) Filter results by last name.
     *     - email: (Optional) Filter results by e-mail.
     *     - maiden_name: (Optional) Filter results by maiden name.
     *     - grad_year: (Optional) The beginning date in a school year (ex.
     *   2017).
     *     - end_grad_year: (Optional) The end date in a school year (ex.
     *   2018). Enter a grad_year and end_grad_year to find matching results in
     *   the date range.
     *     - marker: (Optional) Format - int32. The record number start at to
     *   return the next batch of data.
     *
     * @return \Blackbaud\SKY\School\Objects\UserReadCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserReadCollection($this->send("get", [], ["roles" => $params["roles"],
        "first_name" => $params["first_name"],
        "last_name" => $params["last_name"],
        "email" => $params["email"],
        "maiden_name" => $params["maiden_name"],
        "grad_year" => $params["grad_year"],
        "end_grad_year" => $params["end_grad_year"],
        "marker" => $params["marker"]]));
    }

    /**
     * Creates a new user record.
     *
     * Returns the newly created ID.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @return \int
     *
     * @api
     */
    public function post()
    {
        return $this->send("post", [], []);
    }

    /**
     * Updates the record of a single user.
     *
     * Returns the ID of the user just updated upon success.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @return \int
     *
     * @api
     */
    public function patch()
    {
        return $this->send("patch", [], []);
    }

    /**
     * Returns data for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. ID of the user to be returned.
     *
     * @return \Blackbaud\SKY\School\Objects\UserRead
     *
     * @api
     */
    public function get(array $params)
    {
        return new UserRead($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }
}
