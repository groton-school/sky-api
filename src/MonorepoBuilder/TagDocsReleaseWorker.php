<?php

namespace GrotonSchool\SKY\MonorepoBuilder;

use PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;

class TagDocsReleaseWorker implements ReleaseWorkerInterface
{
    public function getDescription(Version $version): string
    {
        return "Build docs for {$version->getOriginalString()}";
    }

    public function work(Version $version): void
    {
        $tag = "{$version->getOriginalString()}-docs";
        chdir(__DIR__ . '/../docs');
        shell_exec('git add -A .');
        shell_exec(
            "git commit -m \"Update documentation for {$version->getOriginalString()}\""
        );
        shell_exec("git tag $tag");
        shell_exec("git push origin $tag");
    }
}
