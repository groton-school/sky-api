<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\DirectoryModelCollection;
use Blackbaud\SKY\School\Objects\DirectoryResultCollection;

/**
 * @api
 */
class directories extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/directories/{directory_id}";

    /**
     * Returns a collection of directories the logged in user has access to
     * Requires at least one of the following roles in the Education
     * Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * @return \Blackbaud\SKY\School\Objects\DirectoryModelCollection
     *
     * @api
     */
    public function getAll()
    {
        return new DirectoryModelCollection($this->send("get", [], []));
    }

    /**
     * Returns a collection of directory results the logged in user has access
     * to
     *
     * ```search``` is an optional search string to filter directory results.
     *
     * ```search_all``` allows the search string to be used for all fields.
     *
     * When set to ```false```, only searches name fields. defaults to
     * ```true```.
     *
     * Requires at least one of the following roles in the Education
     * Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * @param array{directory_id: int, search?: string, search_all?: bool}
     *   $params An associative array
     *     - directory_id: Format - int32.
     *     - search: (Optional)
     *     - search_all: (Optional)
     *
     * @return \Blackbaud\SKY\School\Objects\DirectoryResultCollection
     *
     * @api
     */
    public function get(array $params)
    {
        return new DirectoryResultCollection($this->send("get", ["{directory_id}" => $params["directory_id"]], ["search" => $params["search"],
        "search_all" => $params["search_all"]]));
    }
}
