<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAppeal
 *
 * @property string $id The id.
 * @property string $appeal_id The appeal id.
 * @property string $appeal The appeal.
 * @property string $description The description.
 * @property string $date_sent The date sent.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $source_code The source code.
 * @property int $finder_number The finder number.
 * @property string $comments The comments.
 * @property string $mkt_segmentation_id The mailing id.
 * @property string $mkt_segmentation_segment_id The segment id.
 * @property string $letter The letter.
 * @property string $package The package.
 * @property string $mailing The mailing.
 * @property string $segment The segment.
 * @property string $test_segment The test segment.
 * @property bool $has_responses Indicates whether has responses.
 * @property bool $appeal_mailing Indicates whether appeal mailing.
 * @property string $time_frame_text The timeframe.
 * @property string $time_frame_group_sort The timeframeorder.
 * @property string $site The site.
 * @property int $mailing_family_type_code The mailing family type code.
 *
 * @api
 */
class ConstituentAppealListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "appeal_id" => "string",
        "appeal" => "string",
        "description" => "string",
        "date_sent" => "string",
        "source_code" => "string",
        "finder_number" => "int",
        "comments" => "string",
        "mkt_segmentation_id" => "string",
        "mkt_segmentation_segment_id" => "string",
        "letter" => "string",
        "package" => "string",
        "mailing" => "string",
        "segment" => "string",
        "test_segment" => "string",
        "has_responses" => "bool",
        "appeal_mailing" => "bool",
        "time_frame_text" => "string",
        "time_frame_group_sort" => "string",
        "site" => "string",
        "mailing_family_type_code" => "int",
    ];
}
