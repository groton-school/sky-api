<?php

namespace GrotonSchool\Blackbaud;

use splitbrain\phpcli\CLI as PhpcliCLI;

class CLI
{
    private static PhpcliCLI $cli;

    /**
     * @param \splitbrain\phpcli\CLI $cli
     *
     * @return void
     * @api
     */
    public static function init(PhpcliCLI $cli): void
    {
        CLI::$cli = $cli;
    }

    /**
     * @return \splitbrain\phpcli\CLI
     * @api
     */
    public static function get(): PhpcliCLI
    {
        return CLI::$cli;
    }
}
