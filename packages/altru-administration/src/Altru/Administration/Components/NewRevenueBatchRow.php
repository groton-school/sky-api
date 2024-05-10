<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateRevenueBatchRow
 *
 * @property string $batch_data_form_id The batch data form ID.
 * @property string $constituent_id The constituent.
 * @property string $constituent_lookup_id The lookup ID.
 * @property string $type The revenue type. Available values are *payment*,
 *   *pledge*, *recurring gift*
 * @property string $date The date. Uses the format YYYY-MM-DDThh:mm:ss. An
 *   example date: *1955-11-05T22:04:00*.
 * @property float $amount The amount.
 * @property string $payment_method The payment method. Available values are
 *   *cash*, *check*, *credit card*, *credit card - last 4 digits*, *direct
 *   debit*, *stock*, *property*, *gift-in-kind*, *standing order*, *none*,
 *   *other*
 * @property string $constituent_account The account. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/59d26d27-5304-4e93-a55e-ebb5d5fd85a4?parameters=constituentid1,{constituent\_id}&amp;parameters=constituentid2,{constituent\_lookup\_id}.
 * @property bool $do_not_acknowledge Indicates whether do not acknowledge.
 * @property bool $do_not_receipt Indicates whether do not receipt.
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $check_date FuzzyDate
 * @property string $check_number The check number.
 * @property string $reference_number The reference number.
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $reference_date FuzzyDate
 * @property string $credit_card_number The card number.
 * @property string $card_holder_name The name on card.
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $expires_on FuzzyDate
 * @property string $credit_type The card type. This code table can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/credittypecode/entries
 * @property string $authorization_code The authorization code.
 * @property string $credit_card_token The credit card token.
 * @property string $issuer The issuer.
 * @property string $merchant_account_id The merchant account.
 * @property float $number_of_units The stock number of units.
 * @property string $symbol The symbol.
 * @property float $median_price The median price.
 * @property string $property_sub_type The property subtype. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/propertysubtypecode/entries
 * @property string $gift_in_kind_sub_type The gift-in-kind subtype. This code
 *   table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/giftinkindsubtypecode/entries
 * @property float $receipt_amount The receipt amount.
 * @property string $single_designation_id The designation.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSplits[]
 *   $splits Splits.
 * @property bool $apply_by_percent Indicates whether apply by.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenueStreams[]
 *   $revenue_streams Revenue streams.
 * @property string $apply_to_shown_for_constituent_id The apply to shown for
 *   constituent.
 * @property int $sequence The sequence.
 * @property string $installment_frequency The installment frequency.
 *   Available values are *annually*, *semi-annually*, *quarterly*, *bimonthly*,
 *   *monthly*, *semi-monthly*, *biweekly*, *weekly*, *irregular*, *single
 *   installment*
 * @property string $installment_start_date The installment start date. Uses
 *   the format YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $installment_end_date The installment end date. Uses the
 *   format YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property int $number_of_installments The no. installments.
 * @property float $installment_amount The installment amount.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSolicitors[]
 *   $solicitors Solicitors.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowBenefits[]
 *   $benefits Benefits.
 * @property int $finder_number The finder number.
 * @property string $source_code The source code.
 * @property string $appeal_id The appeal.
 * @property bool $finder_number_is_valid Indicates whether finder number is
 *   valid.
 * @property bool $user_modified_benefits Indicates whether user modified
 *   benefits.
 * @property bool $benefits_waived Indicates whether user waived benefits.
 * @property string $post_date The gl post date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $post_status The gl post status. Available values are *not
 *   posted*, *do not post*
 * @property bool $send_pledge_reminder Indicates whether send reminders.
 * @property string $sale_date The date on which the stock was sold.. Uses the
 *   format YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property float $sale_amount The amount for which the stock was sold..
 * @property float $broker_fee The fees charged for the sale..
 * @property string $sale_post_status The post status in gl.. Available values
 *   are *not posted*, *do not post*
 * @property string $sale_post_date The date posted to gl.. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property float $sale_low_price The sale low price.
 * @property float $sale_median_price The sale median price.
 * @property float $sale_high_price The sale high price.
 * @property string $note_title The the title of this note.
 * @property string $note_date_entered The the date this note was entered.
 *   Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 * @property string $note_author_id The the author of this note.
 * @property string $note_type The the user-defined type of this note. This
 *   code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenuenotetypecode/entries
 * @property string $note_text_note The the text that comprises this note.
 * @property string $note_html_note The the html that comprises this note.
 * @property float $gift_amount The gift amount. Read-only in the SOAP API.
 * @property bool $given_anonymously Indicates whether given anonymously.
 * @property string $given_anonymously_defaulted_for_constituent_id The given
 *   anonymously defaulted for constituent.
 * @property bool $user_modified_receipt_amount Indicates whether user
 *   modified receipt amount.
 * @property string $pledge_sub_type The indicates the user-defined subtype of
 *   the pledge.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4f2263f4-6ca3-420f-9ac0-913d14d5a100.
 * @property string $rejection The indicates the reason this row was
 *   rejected.. This code table can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/rejectioncode/entries
 * @property string $rejection_message The indicates the reason this row was
 *   rejected..
 * @property string $mailing_id The the marketing effort for the row..
 * @property string $channel The the channel for the row.. This code table can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/channelcode/entries
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowInstallments[]
 *   $installments Installments.
 * @property float $payment_for_pledge_amount The for pledge rows, the amount
 *   to create a payment applied to that pledge for..
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRecognitions[]
 *   $recognitions Recognitions.
 * @property bool $did_recognitions_default Indicates whether indicates if
 *   batch has defaulted recognition credits for this row..
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowTributes[]
 *   $tributes Tributes.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowUnappliedMatchingGiftSplits[]
 *   $unapplied_matching_gift_splits Unapplied matching gift splits.
 * @property float $unapplied_matching_gift_amount The applied.
 * @property string $receipt_type The receipt type. Available values are *per
 *   payment*, *consolidated*
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowNewConstituent[]
 *   $new_constituent New constituent.
 * @property string $other_payment_method The other method. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/otherpaymentmethodcode/entries
 * @property string $letter_code The letter. This simple list can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/2ee83e88-66d2-4e79-af42-c2e37219dc78?parameters=requireselectionorexportdefinition,{false}.
 * @property string $acknowledge_date The acknowledge date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $reference The reference.
 * @property string $category_code The revenue category. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/d9dd46ce-6651-4fcc-b9fe-e59162662224.
 * @property string $acknowledgee_id The acknowledgee.
 * @property string $application_info The application. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/be9ba78d-7171-4923-b8cf-b9ed8480ef8e?parameters=constituentid1,{constituent\_id}&amp;parameters=constituent\_lookup\_id,{constituent\_lookup\_id}&amp;parameters=paying\_pending\_revenue\_id,{paying\_pending\_revenue\_id}&amp;parameters=commitmentid,{other\_constituent\_application\_info}&amp;parameters=pd\_account\_system\_id,{pd\_account\_system\_id}&amp;parameters=batchrevenuerowid,{current\_batch\_row\_id}.
 * @property string $other_type The other type. This code table can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenueothertypecode/entries
 * @property string $opportunity_id The opportunity.
 * @property string $direct_debit_result_code The result code.
 * @property float $low_price The low price.
 * @property float $high_price The high price.
 * @property float $number_of_units_sold The stock sale number of units.
 * @property bool $user_modified_number_of_units_sold Indicates whether user
 *   modified stock number of units sold.
 * @property string $partial_credit_card_number The partial card number.
 * @property bool $existing_constituent Indicates whether is existing
 *   constituent. Read-only in the SOAP API.
 * @property string $standing_order_reference_number The standing order
 *   reference number.
 * @property \Blackbaud\SKY\Altru\Administration\Components\FuzzyDate
 *   $standing_order_reference_date FuzzyDate
 * @property string $standing_order_constituent_account The standing order
 *   account. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/59d26d27-5304-4e93-a55e-ebb5d5fd85a4?parameters=constituentid1,{constituent\_id}&amp;parameters=constituentid2,{constituent\_lookup\_id}.
 * @property bool $standing_order_setup Indicates whether standing order has
 *   been setup.
 * @property string $standing_order_setup_date The standing order setup date.
 *   Uses the format YYYY-MM-DDThh:mm:ss. An example date:
 *   *1955-11-05T22:04:00*.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowTaxDeclarations[]
 *   $tax_declarations Tax declarations.
 * @property string $constituent_type The constituent type. Read-only in the
 *   SOAP API. Available values are *individual*, *organization*, *household*,
 *   *constituent group*
 * @property string $transaction_id The transaction ID.
 * @property bool $transient_card Indicates whether is transient credit card.
 * @property bool $declines_gift_aid Indicates whether declines gift aid.
 * @property string $ddi_source The ddi source. This code table can be queried
 *   at https://api.sky.blackbaud.com/alt-adnmg/codetables/ddisourcecode/entries

 * @property string $ddi_source_date The ddi source date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property bool $covenant Indicates whether is covenant gift.
 * @property float $amount_for_vat The portion subject to vat.
 * @property string $vat_tax_rate The vat tax rate. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/0adee9cf-0222-4b7c-8609-8f5ef4b4c4a6.
 * @property float $vat_amount The vat amount.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowAdditionalApplicationsStream[]
 *   $additional_applications_stream Additional applications stream.
 * @property string $revenue_lookup_id The revenue ID.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationSolicitors[]
 *   $application_solicitors Application solicitors.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationRecognitions[]
 *   $application_recognitions Application recognitions.
 * @property bool $mg_generated Indicates whether mg generated.
 * @property bool $mg_altered Indicates whether mg altered.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowMatchingGifts[]
 *   $matching_gifts Matching gifts.
 * @property string $paying_pending_revenue_id The was paying pending revenue.
 * @property string $gift_in_kind_item_name The item name.
 * @property string $gift_in_kind_disposition The disposition. Available
 *   values are *to use*, *to sell*
 * @property int $gift_in_kind_number_of_units The gift-in-kind number of
 *   units.
 * @property float $gift_in_kind_fair_market_value The fair market value per
 *   unit.
 * @property bool $direct_debit_is_rejected Indicates whether direct debit is
 *   rejected.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowPercentageBenefits[]
 *   $percentage_benefits Percentage benefits.
 * @property bool $gift_aid_sponsorship Indicates whether gift aid
 *   sponsorship.
 * @property string $other_constituent_application_info The other application.
 *   Read-only in the SOAP API.
 * @property string $lock_box The lockbox. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/bf735af5-c203-4ddf-9858-9c7d133c8181.
 * @property string $lock_box_batch_number The lockbox batch number.
 * @property int $lock_box_batch_sequence The lockbox batch sequence.
 * @property string $pd_account_system_id The account system. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/9eca5ee4-3b6b-4069-a4f3-9d7a832b3aff.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationBusinessUnits[]
 *   $application_business_units Application business units.
 * @property string $transaction_currency The transaction currency. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/6e5d1d52-7c15-44be-ad8b-fc00be5c23bc?parameters=pd\_account\_system\_id,{pd\_account\_system\_id}&amp;parameters=revenuetypecode,{typecode}&amp;parameters=currentcurrencyid,{transactioncurrencyid}.
 * @property string $base_currency_id The base currency.
 * @property string $base_exchange_rate The base exchange rate. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/58150f60-4a87-4f64-b3d4-bcd8d587ca4a?parameters=transactioncurrencyid,{transactioncurrencyid}&amp;parameters=pd\_account\_system\_id,{pd\_account\_system\_id}&amp;parameters=asofdate,{date}&amp;parameters=includespotrate,{1}&amp;parameters=revenuetypecode,{typecode}&amp;parameters=base\_currency\_id,{base\_currency\_id}.
 * @property float $exchange_rate The exchange rate.
 * @property float $base_amount The base amount. Read-only in the SOAP API.
 * @property bool $generate_reference_number Indicates whether automatically
 *   generate reference number.
 * @property string $source_code_import The source code (import only).
 * @property string $current_batch_row_id The batchrowid .
 * @property bool $set_null_base_exchange_rate_to_latest Indicates whether use
 *   latest base exchange rate when not specified.
 * @property string $appeal_id_for_import The in import, populate this field
 *   in lieu of the normal "appeal" field to default the appeal’s designation
 *   into the designation field..
 * @property int $credit_card_attempt_count The credit card attempt count.
 * @property string $vendor_id The vendor ID.
 * @property string $client_app_license_id The client app license ID.
 * @property string $bbnc_transaction_processor_id The bbnc transaction
 *   processor ID.
 * @property string $bbnc_origin_appeal_id The bbnc origin appeal ID.
 * @property int $bbnc_tran_id The bbnc tran ID.
 * @property int $bbnc_id The blackbaud internet solutions transaction ID.
 * @property int $bbnc_origin_page_id The bbnc origin page ID.
 * @property string $bbnc_origin_page_name The bbnc origin page name.
 * @property string $financial_institution_id The financial institution.
 * @property string $account_number The account number.
 * @property string $account_type The account type. Available values are
 *   *checking*, *savings*
 * @property string $account_name The account name.
 * @property string $edit_constituent_context The edit constituent context.
 *   Read-only in the SOAP API.
 * @property string $receipt_number The receipt number.
 * @property string $receipt_stack_short_name The receipt stack short name.
 * @property bool $mark_gift_as_receipted Indicates whether mark gift as
 *   receipted.
 * @property int $email_id The email ID.
 * @property string $email_subject The email subject.
 * @property string $email_name The email name.
 * @property string $name The if incoming name is different from existing
 *   name. Available values are *update name*, *add name as an alias*, *ignore
 *   name*, *require manual review (generate exception)*
 * @property string $similar_address The if incoming address is. Available
 *   values are *update existing address (old address data will not be
 *   retained)*, *add as new address*, *ignore address*, *require manual review
 *   (generate exception)*
 * @property string $unsimilar_address The if incoming address is not similar
 *   to any existing address. Available values are *add as new address*, *ignore
 *   address*, *require manual review (generate exception)*
 * @property string $new_address_end_date The if new address has the same type
 *   as any existing address. Available values are *make existing address*,
 *   *keep existing address active*
 * @property string $new_address_primary The make new address primary.
 *   Available values are *always*, *only if the current primary address has the
 *   same address type*, *never*
 * @property string $birth_date_rule The if incoming birth date is not
 *   identical to existing birth date. Available values are *ignore birth date*,
 *   *update birth date*
 * @property string $different_phone The if incoming phone is not identical to
 *   any existing phone. Available values are *add as new phone*, *ignore
 *   phone*, *require manual review (generate exception)*
 * @property string $new_phone_end_date The if new phone has the same type as
 *   any existing phone. Available values are *make existing phone*, *keep
 *   existing phone active*
 * @property string $new_phone_primary The make new phone primary. Available
 *   values are *always*, *only if the current primary phone has the same phone
 *   type*, *never*
 * @property string $different_email The if incoming email address is not
 *   identical to any existing email address. Available values are *add as new
 *   email address*, *ignore email address*, *require manual review (generate
 *   exception)*
 * @property string $new_email_end_date The if new email address has the same
 *   type as any existing email address. Available values are *make existing
 *   email address*, *keep existing email address active*
 * @property string $new_email_primary The make new email primary. Available
 *   values are *always*, *only if the current primary email address has the
 *   same email type*, *never*
 * @property bool $use_global_settings Indicates whether use global settings.
 * @property bool $do_manual_review_for_auto_match Indicates whether do manual
 *   review for auto match. Read-only in the SOAP API.
 * @property string $create_historical_name The retain existing name as
 *   historical reference. Available values are *yes*, *no*
 * @property bool $constituent_has_edits Indicates whether constituent has
 *   edits. Read-only in the SOAP API.
 * @property string $first_payment_processed The first payment processed.
 * @property float $payment_for_pledge_receipt_amount The payment for pledge
 *   receipt amount.
 * @property string $sepa_mandate The mandate. This simple list can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/3444cee8-1aa9-4bde-babf-ff53eb4edf9a?parameters=constituentaccountid,{constituentaccountid}&amp;parameters=sepamandateid,{sepamandateid}.
 * @property bool $add_sepa_mandate Indicates whether in import, set this
 *   field to true to add a sepa mandate.
 * @property string $sepa_mandate_custom_identifier The in import, when adding
 *   a sepa mandate, set this field to override the default value genrated for
 *   the unique mandate number.
 * @property string $sepa_mandate_signature_date The in import, when adding a
 *   sepa mandate, optionally specify a signature date for the new mandate. Uses
 *   the format YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $sepa_mandate_type The in import, when adding a sepa
 *   mandate, a mandate type is required for the new mandate. Available values
 *   are *one-off*, *recurrent*
 * @property string $financial_institution_name The financial institution
 *   name.
 * @property string $banking_system The banking system. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/164ce2d9-5a39-436e-a63f-e4b75fdaa23d.
 * @property string $branch_name The branch name.
 * @property string $routing_number The routing number.
 * @property string $sort_code The sort code.
 * @property string $bic The bic.
 * @property string $bank_code The bank code.
 * @property bool $require_credit_card_processing Indicates whether determines
 *   if this batch row requires credit card processing..
 *
 * @api
 */
class NewRevenueBatchRow extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "batch_data_form_id" => "string",
        "constituent_id" => "string",
        "constituent_lookup_id" => "string",
        "type" => "string",
        "date" => "string",
        "amount" => "float",
        "payment_method" => "string",
        "constituent_account" => "string",
        "do_not_acknowledge" => "bool",
        "do_not_receipt" => "bool",
        "check_date" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "check_number" => "string",
        "reference_number" => "string",
        "reference_date" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "credit_card_number" => "string",
        "card_holder_name" => "string",
        "expires_on" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "credit_type" => "string",
        "authorization_code" => "string",
        "credit_card_token" => "string",
        "issuer" => "string",
        "merchant_account_id" => "string",
        "number_of_units" => "float",
        "symbol" => "string",
        "median_price" => "float",
        "property_sub_type" => "string",
        "gift_in_kind_sub_type" => "string",
        "receipt_amount" => "float",
        "single_designation_id" => "string",
        "splits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSplits[]",
        "apply_by_percent" => "bool",
        "revenue_streams" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenueStreams[]",
        "apply_to_shown_for_constituent_id" => "string",
        "sequence" => "int",
        "installment_frequency" => "string",
        "installment_start_date" => "string",
        "installment_end_date" => "string",
        "number_of_installments" => "int",
        "installment_amount" => "float",
        "solicitors" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSolicitors[]",
        "benefits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowBenefits[]",
        "finder_number" => "int",
        "source_code" => "string",
        "appeal_id" => "string",
        "finder_number_is_valid" => "bool",
        "user_modified_benefits" => "bool",
        "benefits_waived" => "bool",
        "post_date" => "string",
        "post_status" => "string",
        "send_pledge_reminder" => "bool",
        "sale_date" => "string",
        "sale_amount" => "float",
        "broker_fee" => "float",
        "sale_post_status" => "string",
        "sale_post_date" => "string",
        "sale_low_price" => "float",
        "sale_median_price" => "float",
        "sale_high_price" => "float",
        "note_title" => "string",
        "note_date_entered" => "string",
        "note_author_id" => "string",
        "note_type" => "string",
        "note_text_note" => "string",
        "note_html_note" => "string",
        "gift_amount" => "float",
        "given_anonymously" => "bool",
        "given_anonymously_defaulted_for_constituent_id" => "string",
        "user_modified_receipt_amount" => "bool",
        "pledge_sub_type" => "string",
        "rejection" => "string",
        "rejection_message" => "string",
        "mailing_id" => "string",
        "channel" => "string",
        "installments" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowInstallments[]",
        "payment_for_pledge_amount" => "float",
        "recognitions" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRecognitions[]",
        "did_recognitions_default" => "bool",
        "tributes" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowTributes[]",
        "unapplied_matching_gift_splits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowUnappliedMatchingGiftSplits[]",
        "unapplied_matching_gift_amount" => "float",
        "receipt_type" => "string",
        "new_constituent" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowNewConstituent[]",
        "other_payment_method" => "string",
        "letter_code" => "string",
        "acknowledge_date" => "string",
        "reference" => "string",
        "category_code" => "string",
        "acknowledgee_id" => "string",
        "application_info" => "string",
        "other_type" => "string",
        "opportunity_id" => "string",
        "direct_debit_result_code" => "string",
        "low_price" => "float",
        "high_price" => "float",
        "number_of_units_sold" => "float",
        "user_modified_number_of_units_sold" => "bool",
        "partial_credit_card_number" => "string",
        "existing_constituent" => "bool",
        "standing_order_reference_number" => "string",
        "standing_order_reference_date" => "\Blackbaud\SKY\Altru\Administration\Components\FuzzyDate",
        "standing_order_constituent_account" => "string",
        "standing_order_setup" => "bool",
        "standing_order_setup_date" => "string",
        "tax_declarations" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowTaxDeclarations[]",
        "constituent_type" => "string",
        "transaction_id" => "string",
        "transient_card" => "bool",
        "declines_gift_aid" => "bool",
        "ddi_source" => "string",
        "ddi_source_date" => "string",
        "covenant" => "bool",
        "amount_for_vat" => "float",
        "vat_tax_rate" => "string",
        "vat_amount" => "float",
        "additional_applications_stream" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowAdditionalApplicationsStream[]",
        "revenue_lookup_id" => "string",
        "application_solicitors" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationSolicitors[]",
        "application_recognitions" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationRecognitions[]",
        "mg_generated" => "bool",
        "mg_altered" => "bool",
        "matching_gifts" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowMatchingGifts[]",
        "paying_pending_revenue_id" => "string",
        "gift_in_kind_item_name" => "string",
        "gift_in_kind_disposition" => "string",
        "gift_in_kind_number_of_units" => "int",
        "gift_in_kind_fair_market_value" => "float",
        "direct_debit_is_rejected" => "bool",
        "percentage_benefits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowPercentageBenefits[]",
        "gift_aid_sponsorship" => "bool",
        "other_constituent_application_info" => "string",
        "lock_box" => "string",
        "lock_box_batch_number" => "string",
        "lock_box_batch_sequence" => "int",
        "pd_account_system_id" => "string",
        "application_business_units" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowApplicationBusinessUnits[]",
        "transaction_currency" => "string",
        "base_currency_id" => "string",
        "base_exchange_rate" => "string",
        "exchange_rate" => "float",
        "base_amount" => "float",
        "generate_reference_number" => "bool",
        "source_code_import" => "string",
        "current_batch_row_id" => "string",
        "set_null_base_exchange_rate_to_latest" => "bool",
        "appeal_id_for_import" => "string",
        "credit_card_attempt_count" => "int",
        "vendor_id" => "string",
        "client_app_license_id" => "string",
        "bbnc_transaction_processor_id" => "string",
        "bbnc_origin_appeal_id" => "string",
        "bbnc_tran_id" => "int",
        "bbnc_id" => "int",
        "bbnc_origin_page_id" => "int",
        "bbnc_origin_page_name" => "string",
        "financial_institution_id" => "string",
        "account_number" => "string",
        "account_type" => "string",
        "account_name" => "string",
        "edit_constituent_context" => "string",
        "receipt_number" => "string",
        "receipt_stack_short_name" => "string",
        "mark_gift_as_receipted" => "bool",
        "email_id" => "int",
        "email_subject" => "string",
        "email_name" => "string",
        "name" => "string",
        "similar_address" => "string",
        "unsimilar_address" => "string",
        "new_address_end_date" => "string",
        "new_address_primary" => "string",
        "birth_date_rule" => "string",
        "different_phone" => "string",
        "new_phone_end_date" => "string",
        "new_phone_primary" => "string",
        "different_email" => "string",
        "new_email_end_date" => "string",
        "new_email_primary" => "string",
        "use_global_settings" => "bool",
        "do_manual_review_for_auto_match" => "bool",
        "create_historical_name" => "string",
        "constituent_has_edits" => "bool",
        "first_payment_processed" => "string",
        "payment_for_pledge_receipt_amount" => "float",
        "sepa_mandate" => "string",
        "add_sepa_mandate" => "bool",
        "sepa_mandate_custom_identifier" => "string",
        "sepa_mandate_signature_date" => "string",
        "sepa_mandate_type" => "string",
        "financial_institution_name" => "string",
        "banking_system" => "string",
        "branch_name" => "string",
        "routing_number" => "string",
        "sort_code" => "string",
        "bic" => "string",
        "bank_code" => "string",
        "require_credit_card_processing" => "bool",
    ];
}
