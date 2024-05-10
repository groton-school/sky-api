<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\EducationSearchCollection;

/**
 * @api
 */
class Search extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/educationalhistories/search";

    /**
     * This search list provides the ability to search for educational history
     * records.
     *
     * @param array{full_name_educational_institution: string, key_name:
     *   string, first_name: string, lookup_id: string, exact_match_only: bool,
     *   check_nick_name: bool, check_aliases: bool, check_alternate_lookup_ids:
     *   bool, educational_institution: string, academic_catalog_program:
     *   string, educational_program: string, constituency_status: "All
     *   statuses"|"Unknown"|"Currently attending"|"Incomplete"|"Graduated",
     *   educational_history_status: string, academic_catalog_degree: string,
     *   educational_degree: string, class_of: int, primary_only: bool, limit:
     *   int} $params An associative array
     *     - full_name_educational_institution: full name educational
     *   institution
     *     - key_name: last/org name
     *     - first_name: first name
     *     - lookup_id: lookup id
     *     - exact_match_only: match all criteria exactly
     *     - check_nick_name: check nickname
     *     - check_aliases: check aliases
     *     - check_alternate_lookup_ids: check alternate lookup ids
     *     - educational_institution: educational institution
     *   SimpleDataListID=0e239b5a-8c99-4e1e-9c10-06adce4b6500.
     *     - academic_catalog_program: academic catalog program
     *   SimpleDataListID=d411c16b-8bcf-4fc8-a747-754e1e89e9bc.
     *     - educational_program: educational program This code table can be
     *   queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/EDUCATIONALPROGRAMCODE/entries
     *     - constituency_status: status
     *     - educational_history_status: status
     *   SimpleDataListID=086c5bfb-1a80-46cf-a2f5-05ef51120891.
     *     - academic_catalog_degree: academic catalog degree
     *   SimpleDataListID=73c67942-07ad-412e-8596-a042e5e68002.
     *     - educational_degree: educational degree This code table can be
     *   queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/EDUCATIONALDEGREECODE/entries
     *     - class_of: class year
     *     - primary_only: only search primary records
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\EducationSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): EducationSearchCollection
    {
        assert(isset($params['full_name_educational_institution']), new ArgumentException("Parameter `full_name_educational_institution` is required"));
        assert(isset($params['key_name']), new ArgumentException("Parameter `key_name` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['lookup_id']), new ArgumentException("Parameter `lookup_id` is required"));
        assert(isset($params['exact_match_only']), new ArgumentException("Parameter `exact_match_only` is required"));
        assert(isset($params['check_nick_name']), new ArgumentException("Parameter `check_nick_name` is required"));
        assert(isset($params['check_aliases']), new ArgumentException("Parameter `check_aliases` is required"));
        assert(isset($params['check_alternate_lookup_ids']), new ArgumentException("Parameter `check_alternate_lookup_ids` is required"));
        assert(isset($params['educational_institution']), new ArgumentException("Parameter `educational_institution` is required"));
        assert(isset($params['academic_catalog_program']), new ArgumentException("Parameter `academic_catalog_program` is required"));
        assert(isset($params['educational_program']), new ArgumentException("Parameter `educational_program` is required"));
        assert(isset($params['constituency_status']), new ArgumentException("Parameter `constituency_status` is required"));
        assert(isset($params['educational_history_status']), new ArgumentException("Parameter `educational_history_status` is required"));
        assert(isset($params['academic_catalog_degree']), new ArgumentException("Parameter `academic_catalog_degree` is required"));
        assert(isset($params['educational_degree']), new ArgumentException("Parameter `educational_degree` is required"));
        assert(isset($params['class_of']), new ArgumentException("Parameter `class_of` is required"));
        assert(isset($params['primary_only']), new ArgumentException("Parameter `primary_only` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new EducationSearchCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['full_name_educational_institution','key_name','first_name','lookup_id','exact_match_only','check_nick_name','check_aliases','check_alternate_lookup_ids','educational_institution','academic_catalog_program','educational_program','constituency_status','educational_history_status','academic_catalog_degree','educational_degree','class_of','primary_only','limit']), ARRAY_FILTER_USE_KEY)));
    }
}
