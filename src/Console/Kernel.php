<?php

namespace GibbonCms\Liana\Console;

use GibbonCms\Liana\Liana;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @var array
     */
    protected $defaultCommands = [
        'GibbonCms\Liana\Console\Commands\BuildCommand',
        'GibbonCms\Liana\Console\Commands\ClearCommand'
    ];

    /**
     * @param  \GibbonCms\Liana\Liana $app
     */
    public function __construct(Liana $app, array $commands = [])
    {
        parent::__construct($app);

        $this->commands = array_merge($this->defaultCommands, $commands);
    }
}
