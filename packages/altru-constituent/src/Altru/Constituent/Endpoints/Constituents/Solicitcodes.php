<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentSolicitCodeListCollection;

/**
 * @api
 */
class Solicitcodes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/solicitcodes";

    /**
     * Constituent solicit code list
     *
     * @param array{constituent_id: string, site_id: string, site_filter_mode:
     *   "All sites"|"My site"|"My site's branch"|"Selected sites",
     *   sites_selected: string, show_expired: bool, date_range: "All
     *   dates"|"Last 30 days"|"Last 60 days"|"Last 90 days"|"Last 6
     *   months"|"Last year"|"Last 2 years", limit: int} $params An associative
     *   array
     *     - constituent_id: The constituent id.
     *     - site_id: site
     *     - site_filter_mode: sites
     *     - sites_selected: Format - XML. sites selected
     *     - show_expired: show expired codes for
     *     - date_range: date range
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentSolicitCodeListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): ConstituentSolicitCodeListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['site_id']), new ArgumentException("Parameter `site_id` is required"));
        assert(isset($params['site_filter_mode']), new ArgumentException("Parameter `site_filter_mode` is required"));
        assert(isset($params['sites_selected']), new ArgumentException("Parameter `sites_selected` is required"));
        assert(isset($params['show_expired']), new ArgumentException("Parameter `show_expired` is required"));
        assert(isset($params['date_range']), new ArgumentException("Parameter `date_range` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentSolicitCodeListCollection($this->send("get", ["constituent_id" => $params['constituent_id']], ["site_id" => $params['site_id'],
            "site_filter_mode" => $params['site_filter_mode'],
            "sites_selected" => $params['sites_selected'],
            "show_expired" => $params['show_expired'],
            "date_range" => $params['date_range'],
            "limit" => $params['limit']]));
    }
}
