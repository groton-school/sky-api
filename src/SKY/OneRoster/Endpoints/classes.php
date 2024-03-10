<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ClassOutputModel;
use Blackbaud\SKY\OneRoster\Components\ClassesOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Results;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Students;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers;

/**
 * Routing class for the subnamespace `Classes`
 *
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems $lineItems
 *   Routing class for the subnamespace `LineItems`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\Results $results
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers $teachers
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students $students
 *   Routing class for the subnamespace `Students`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories $categories
 *
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "lineItems" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems",
        "results" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Results",
        "teachers" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers",
        "students" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Students",
        "categories" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories",
    ];

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems $_lineItems
     *   Routing class for the subnamespace `LineItems`
     */
    protected LineItems $_lineItems = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Results $_results
     */
    protected Results $_results = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers $_teachers
     */
    protected Teachers $_teachers = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students $_students
     *   Routing class for the subnamespace `Students`
     */
    protected Students $_students = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories $_categories
     */
    protected Categories $_categories = null;

    /**
     * Returns a collection of classes.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassesOutputModel OK - It
     *   was possible to read the collection.
     */
    public function getAllBy(): ClassesOutputModel
    {
        return new ClassesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific class.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): ClassOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new ClassOutputModel($this->send("get", ["{id}" => $params['id']], []));
    }
}
