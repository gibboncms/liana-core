<?php

namespace GibbonCms\Liana\Console\Commands;

use Illuminate\Console\Command;

class ClearCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'liana:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear liana\'s cache';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        app()->make('filesystem')->deleteDirectory('liana');

        $this->info('Liana\'s cache has been cleared!');
    }
}
