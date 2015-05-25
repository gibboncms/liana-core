<?php

namespace GibbonCms\Liana;

use Laravel\Lumen\Application;

class Liana extends Application
{
    /**
     * Prepare the application to execute a console command.
     * Removed migration and seeding providers
     *
     * @return void
     */
    public function prepareForConsoleCommand()
    {
        $this->withFacades();

        $this->make('cache');
        $this->make('queue');

        $this->configure('database');

        $this->register('Illuminate\Queue\ConsoleServiceProvider');
    }
}
