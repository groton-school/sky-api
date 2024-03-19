<?php

namespace GrotonSchool\SKY\Build;

use Battis\DataUtilities\Path;
use Battis\OpenAPI\Generator;
use cebe\openapi\spec\OpenApi;

class GroupingGenerator extends Generator
{
    protected function getNamespaceFromSpec(
        string $specPath,
        OpenApi $spec,
        string $baseNamespace
    ): string {
        return Path::join(
            '\\',
            array_merge([$baseNamespace], explode(' ', $spec->info->title))
        );
    }

    protected function getBasePathFromSpec(
        string $specPath,
        OpenApi $spec,
        string $basePath
    ): string {
        return Path::join(
            array_merge([$basePath], explode(' ', $spec->info->title))
        );
    }
}
