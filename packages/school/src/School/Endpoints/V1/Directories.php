<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\DirectoryModelCollection;
use Blackbaud\SKY\School\Components\DirectoryResultCollection;

/**
 * @api
 */
class Directories extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/directories/{directory_id}";

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
     * @return \Blackbaud\SKY\School\Components\DirectoryModelCollection
     *   Success
     */
    public function list_(): DirectoryModelCollection
    {
        return new DirectoryModelCollection($this->send("get", [], []));
    }

    /**
     * Returns a collection of directory results the logged in user has access
     * to
     *
     * ```search``` is an optional search string to filter directory results.
     *
     * ```search\_all``` allows the search string to be used for all fields.
     *
     *  When set to ```false```, only searches name fields. defaults to
     * ```true```.
     *
     *  Requires at least one of the following roles in the Education
     * Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * @param array{directory_id: int, search: string, search_all: bool}
     *   $params An associative array
     *     - directory_id: Format - int32.
     *     - search:
     *     - search_all:
     *
     * @return \Blackbaud\SKY\School\Components\DirectoryResultCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByDirectoryId(array $params): DirectoryResultCollection
    {
        assert(isset($params['directory_id']), new ArgumentException("Parameter `directory_id` is required"));
        assert(isset($params['search']), new ArgumentException("Parameter `search` is required"));
        assert(isset($params['search_all']), new ArgumentException("Parameter `search_all` is required"));

        return new DirectoryResultCollection($this->send("get", ["{directory_id}" => $params['directory_id']], ["search" => $params['search'],
            "search_all" => $params['search_all']]));
    }
}
