<?php

namespace GibbonCms\Liana;

use Laravel\Lumen\Application;

class Liana extends Application
{
    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    protected function registerViewBindings()
    {
        $this->singleton('view', function ()
        {
            $this->configure('view');

            $this['config']['view.paths'] = [
                realpath(base_path('views')),
            ];
            
            return $this->loadComponent('view', 'Illuminate\View\ViewServiceProvider');
        });
    }

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
