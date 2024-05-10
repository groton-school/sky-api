<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenueStreams
 *
 * @property string $id id
 * @property string $application_id application id
 * @property string $constituent_id constituent id
 * @property string $constituent_name constituent name
 * @property float $applied applied amount
 * @property float $applied_percent applied percent
 * @property float $balance balance
 * @property float $amount_due amount due
 * @property string $date_due date due
 * @property string $type The typecode. Available values are *gift*, *pledge*,
 *   *recurring gift*, *planned gift*, *matching gift claim*, *membership*,
 *   *event registration fee*, *grant award*, *donor challenge claim*,
 *   *opportunity*
 * @property float $receipt_amount receipt amount
 * @property bool $do_not_receipt do not receipt
 * @property string $description description
 * @property bool $was_generated was generated
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledges[]
 *   $pledges Pledges.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMemberships[]
 *   $memberships Memberships.
 * @property string $batch_revenue_registrant_id batch registrant id
 * @property string $over_payment_application_type The overpayment to.
 *   Available values are *pledge balance*, *next installment*
 * @property string $designation_list designations
 * @property string $application_commitment_id used to lookup revenue, event
 *   registrations, or memberships by lookupid
 * @property string $sponsorship_opportunity sponsorship opportunity
 * @property string $transaction_currency_id transaction currency
 * @property string $application_currency_id application currency
 * @property string $application_exchange_rate_id application exchange rate
 * @property float $application_applied_amount application applied amount
 * @property string $pd_account_system_id pd account system
 * @property bool $sponsorship_rg_additional_gift sponsorshiprgadditionalgift
 * @property string $category_code The revenue category. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/d9dd46ce-6651-4fcc-b9fe-e59162662224.
 * @property string $membership_program_name membership program name
 * @property string $membership_level_name membership level name
 * @property int $sort_order sort order
 *
 * @api
 */
class NewRevenueBatchRowRevenueStreams extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "application_id" => "string",
        "constituent_id" => "string",
        "constituent_name" => "string",
        "applied" => "float",
        "applied_percent" => "float",
        "balance" => "float",
        "amount_due" => "float",
        "date_due" => "string",
        "type" => "string",
        "receipt_amount" => "float",
        "do_not_receipt" => "bool",
        "description" => "string",
        "was_generated" => "bool",
        "pledges" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledges[]",
        "memberships" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMemberships[]",
        "batch_revenue_registrant_id" => "string",
        "over_payment_application_type" => "string",
        "designation_list" => "string",
        "application_commitment_id" => "string",
        "sponsorship_opportunity" => "string",
        "transaction_currency_id" => "string",
        "application_currency_id" => "string",
        "application_exchange_rate_id" => "string",
        "application_applied_amount" => "float",
        "pd_account_system_id" => "string",
        "sponsorship_rg_additional_gift" => "bool",
        "category_code" => "string",
        "membership_program_name" => "string",
        "membership_level_name" => "string",
        "sort_order" => "int",
    ];
}
