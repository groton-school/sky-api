<?php

namespace GrotonSchool\Blackbaud\OpenAPI;

class TypeMap
{
    public static function callback(string $name): string
    {
        return "_$name";
    }

    /**
     * @return string
     * @api
     */
    public static function _boolean(): string
    {
        return "bool";
    }

    /**
     * @return string
     * @api
     */
    public static function _integer(): string
    {
        return "int";
    }

    /**
     * @param array{format: string} $type
     *
     * @return string
     * @api
     */
    public static function _number(array $type): string
    {
        if (array_key_exists("format", $type)) {
            return $type["format"];
        }
        return "scalar";
    }

    /**
     * @return string
     * @api
     */
    public static function _string(): string
    {
        return "string";
    }

    /**
     * @param array{items: array{$ref: string, type: string}} $type
     *
     * @return string
     * @api
     */
    public static function _array(array $type): string
    {
        $result = null;
        if (array_key_exists('$ref', $type["items"])) {
            $result = basename($type["items"]['$ref']) . "[]";
        } elseif (array_key_exists("type", $type["items"])) {
            $method = TypeMap::callback($type["items"]["type"]);
            $result = (string) TypeMap::$method($type["items"]);
        }
        if ($result !== null) {
            return ReservedWords::filter($result);
        } else {
            throw new OpenAPIException(
                "unknown array items type " . json_encode($type),
                OpenAPIException::TYPE_ERROR
            );
        }
    }

    /**
     * @param array{additionalProperties: array{type: string}} $type
     *
     * @return string
     * @api
     */
    public static function _object(array $type): string
    {
        return "array<string, " . $type["additionalProperties"]["type"] . ">";
    }
}
