<?php

namespace Build;

/**
 * @api
 */
class CLI
{
    /**
     * @param \Composer\Script\Event $event
     *
     * @return void
     */
    public static function build($event)
    {
        foreach($event->getComposer()->getPackage()->getExtra()["build"] as $packageBuild) {
            shell_exec($packageBuild);
        }
    }
}
