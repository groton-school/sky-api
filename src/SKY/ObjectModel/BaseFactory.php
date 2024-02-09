<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel;

use GrotonSchool\Blackbaud\SKY;
use GrotonSchool\Blackbaud\SKY\Endpoint;

abstract class BaseFactory
{
    /** @var string[] $SKY_PARAMS */
    protected static $SKY_PARAMS = [];

    protected Endpoint $endpoint;

    public function __construct(SKY $sky)
    {
        $this->endpoint = $sky->api()->getEndpoint($this->getEndpointPath());
    }

    abstract protected function getEndpointPath(): string;

    abstract protected function getInstanceType(): string;

    /**
     * @param array<string, mixed> $result
     *
     * @return array<string, mixed>
     */
    protected function getValue(array $result): array
    {
        return $result;
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return Base|null
     */
    public function get($params = [])
    {
        $response = $this->endpoint->get(
            $this->getEndpointPath() .
            "./?" .
            http_build_query($this->filterParams($params))
        );
        return new ($this->getInstanceType())($this->getValue($response));
    }

    protected function filterParams($params)
    {
        return array_filter(
            $params,
            fn($key) => in_array($key, static::$SKY_PARAMS),
            ARRAY_FILTER_USE_KEY
        );
    }
}
