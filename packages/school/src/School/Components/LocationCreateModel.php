<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $opponent_id ID of the opponent
 * @property string $name Name of the location
 * @property ?string $directions Directions to the location
 * @property ?int $travel_time Travel time (minutes) to the location
 * @property ?string $address_line1 Location Address Line 1
 * @property ?string $address_line2 Location Address Line 2
 * @property ?string $address_line3 Location Address Line 3
 * @property ?string $city Location City
 * @property ?string $state Location State
 * @property ?string $state_short Location State abbreviation
 * @property ?string $country Location Country
 * @property ?string $zip Location Zip
 * @property ?string $province Location Province
 * @property ?string $map_url URL to the directions/map
 *
 * @api
 */
class LocationCreateModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "opponent_id" => "int",
        "name" => "string",
        "directions" => "string",
        "travel_time" => "int",
        "address_line1" => "string",
        "address_line2" => "string",
        "address_line3" => "string",
        "city" => "string",
        "state" => "string",
        "state_short" => "string",
        "country" => "string",
        "zip" => "string",
        "province" => "string",
        "map_url" => "string",
    ];
}
