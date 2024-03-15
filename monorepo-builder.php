<?php

declare(strict_types=1);

use Build\TagDocsReleaseWorker;
use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;

require __DIR__ . '/vendor/autoload.php';

return static function (MBConfig $mbConfig): void {
    $mbConfig->packageDirectories([
        __DIR__ . '/packages',
        __DIR__ . '/examples',
    ]);

    $mbConfig->workers([
        TagVersionReleaseWorker::class,
        PushTagReleaseWorker::class,
        TagDocsReleaseWorker::class,
    ]);
};
