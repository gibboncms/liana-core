<?php

namespace GibbonCms\Liana\Console;

use Laravel\Lumen\Application;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @param  \Laravel\Lumen\Application $app
     * @param array $commands
     */
    public function __construct(Application $app, array $commands)
    {
        parent::__construct($app);

        $this->commands = $commands;
    }
}
