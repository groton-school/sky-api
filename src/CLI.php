<?php

namespace Build;

use Composer\Script\Event;

class CLI {
    public static function build (Event $event) {
        foreach($event->getComposer()->getPackage()->getExtra()["build"] as $packageBuild) {
            shell_exec($packageBuild);
        }
    }
}