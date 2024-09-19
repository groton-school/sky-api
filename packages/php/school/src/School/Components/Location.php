<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id ID of the location
 * @property ?string $name Name of the location
 * @property ?string $address_line1 Address Line 1
 * @property ?string $address_line2 Address Line 2
 * @property ?string $address_line3 Address Line 3
 * @property ?string $city City
 * @property ?string $state State
 * @property ?string $state_short State abbreviation
 * @property ?string $country Country
 * @property ?string $zip Zip
 * @property ?string $province Province
 * @property ?string $map_url URL to the directions/map
 * @property ?string $directions Directions to the location
 * @property ?int $travel_time Travel time (minutes) to the location
 * @property ?int $opponent_id Opponent ID associated with this location
 *
 * @api
 */
class Location extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
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
        "directions" => "string",
        "travel_time" => "int",
        "opponent_id" => "int",
    ];
}
