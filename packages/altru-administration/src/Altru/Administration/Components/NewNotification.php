<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateNotification
 *
 * @property string $name The name.
 * @property string $message The message.
 * @property string $record_type The record type. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/93e92ab4-bb35-44c0-9f11-3b2ffb1b5cc1.
 * @property string $record_id_set_register_id The selection.
 * @property string $application_user_record_type_id The application user
 *   record type ID. Read-only in the SOAP API.
 * @property string $application_user_id_set_register_id The selection.
 * @property string $apply_to The displays for. Available values are *all
 *   users*, *selected users*
 * @property bool $display_notification_window Indicates whether display in
 *   notification window.
 * @property bool $display_in_daily_sales Indicates whether display in daily
 *   sales.
 * @property string $valid_until The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 *
 * @api
 */
class NewNotification extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "message" => "string",
        "record_type" => "string",
        "record_id_set_register_id" => "string",
        "application_user_record_type_id" => "string",
        "application_user_id_set_register_id" => "string",
        "apply_to" => "string",
        "display_notification_window" => "bool",
        "display_in_daily_sales" => "bool",
        "valid_until" => "string",
    ];
}
