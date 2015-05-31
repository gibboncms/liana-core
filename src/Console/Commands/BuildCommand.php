<?php

namespace GibbonCms\Liana\Console\Commands;

use Illuminate\Console\Command;

class BuildCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'liana:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build all liana modules';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        app()->make('liana')->setUp();

        $this->info('Liana build successfull!');
    }
}
