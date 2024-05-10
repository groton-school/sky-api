<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentNote;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentNote;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes\View;

/**
 * Routing class for the subnamespace `Constituentnotes`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes\View
 *   $view
 *
 * @api
 */
class Constituentnotes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentnotes/{constituent_note_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "view" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes\View",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes\View
     *   $_view
     */
    protected ?View $_view = null;

    /**
     * This operation is used to add a constituent note.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentNote
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentNote $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }

    /**
     * This deletion handles only the basic deletion rules for a constituent
     * note (currently none).
     *
     * @param array{constituent_note_id: string} $params An associative array
     *     - constituent_note_id: The constituent note id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentNoteId(array $params): mixed
    {
        assert(isset($params['constituent_note_id']), new ArgumentException("Parameter `constituent_note_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['constituent_note_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * This operation is for editing a given constituent's note.
     *
     * @param array{constituent_note_id: string} $params An associative array
     *     - constituent_note_id: The constituent note id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentNote
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentNoteId(array $params, EditConstituentNote $requestBody): mixed
    {
        assert(isset($params['constituent_note_id']), new ArgumentException("Parameter `constituent_note_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_note_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
