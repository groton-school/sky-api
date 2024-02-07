<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel;

use JsonSerializable;

abstract class Base implements JsonSerializable
{
    /**
     * JSON array of object data
     *
     * @var array<string, mixed> $data
     */
    protected array $data;

    /**
     * Construct from a JSON object response value from the SKY API
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function jsonSerialize(): mixed
    {
        return $this->data;
    }

    public function getId(): string
    {
        if (empty($this->data["id"])) {
            return null;
        }
        return $this->data["id"];
    }
}
