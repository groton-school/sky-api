<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowApplicationSolicitors
 *
 * @property string $application_id application id
 * @property int $application_type_code application type
 * @property int $additional_application_type_code additional application type
 * @property string $additional_application_designation_id additional
 *   application designation id
 * @property float $application_amount additional application amount
 * @property string $application_description application
 * @property string $collection_description solicitors
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationsolicitorsSolicitors[]
 *   $solicitors Solicitors.
 * @property string $additional_application_opportunity_id additional
 *   application opportunity id
 * @property string $base_currency_id base currency
 * @property bool $additional_application_declines_gift_aid additional
 *   application declines gift aid
 * @property string $additional_application_sponsorship_id additional
 *   application sponsorship id
 *
 * @api
 */
class NewRevenueBatchRowApplicationSolicitors extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "application_id" => "string",
        "application_type_code" => "int",
        "additional_application_type_code" => "int",
        "additional_application_designation_id" => "string",
        "application_amount" => "float",
        "application_description" => "string",
        "collection_description" => "string",
        "solicitors" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationsolicitorsSolicitors[]",
        "additional_application_opportunity_id" => "string",
        "base_currency_id" => "string",
        "additional_application_declines_gift_aid" => "bool",
        "additional_application_sponsorship_id" => "string",
    ];
}
