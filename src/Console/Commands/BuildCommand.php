<?php

namespace GibbonCms\Liana\Console\Commands;

use Illuminate\Console\Command;
use Queue;
use Symfony\Component\Console\Input\InputOption;

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
        if ($this->input->getOption('now')) {
            app()->make('liana')->setUp();
            $this->info('Liana build successfull!');
            app('log')->info('Liana build successfull!');
            return;
        }

        Queue::push('GibbonCms\Liana\Jobs\Build');

        $this->info('Queued for build...');
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['now', null, InputOption::VALUE_NONE, 'Immediately build (don\'t queue)'],
        ];
    }
}
