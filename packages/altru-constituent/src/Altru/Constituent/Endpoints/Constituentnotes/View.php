<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentNoteView;

/**
 * @api
 */
class View extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentnotes/{constituent_note_id}/view";

    /**
     * This dataform template displays a constituent note.
     *
     * @param array{constituent_note_id: string} $params An associative array
     *     - constituent_note_id: The constituent note id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentNoteView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentNoteId(array $params): ConstituentNoteView
    {
        assert(isset($params['constituent_note_id']), new ArgumentException("Parameter `constituent_note_id` is required"));

        return new ConstituentNoteView($this->send("get", ["constituent_note_id" => $params['constituent_note_id']], []));
    }
}
