<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Events\Calendar;
use Blackbaud\SKY\School\Endpoints\V1\Events\Categories;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Events
 *
 * @api
 */
class Events extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Events\Categories $_categories
     */
    public Categories $_categories;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Events\Calendar $_calendar
     */
    public Calendar $_calendar;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Events\Categories
     *
     * @api
     */
    public function categories(): Categories
    {
        if ($this->_categories === null) {
            $this->_categories = new Categories($this->api);
        }
        return $this->_categories;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Events\Calendar
     *
     * @api
     */
    public function calendar(): Calendar
    {
        if ($this->_calendar === null) {
            $this->_calendar = new Calendar($this->api);
        }
        return $this->_calendar;
    }
}
