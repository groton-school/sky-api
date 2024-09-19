<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;

return static function (MBConfig $mbConfig): void {
    $mbConfig->packageDirectories([
        __DIR__ . '/packages/php',
        __DIR__ . '/examples/php',
    ]);

    $mbConfig->workers([
        TagVersionReleaseWorker::class,
        PushTagReleaseWorker::class,
    ]);
};
