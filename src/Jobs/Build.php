<?php

namespace GibbonCms\Liana\Jobs;

class Build
{
    public function fire($job, $module = '')
    {
        if ($module !== '') {
            liana($module)->setUp();
            app('log')->info('Liana build successfull! (module: '.$module.')');
            return;
        }

        liana()->setUp();
        app('log')->info('Liana build successfull!');
    }
}
