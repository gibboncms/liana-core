<?php

if ( ! function_exists('liana'))
{
    /**
     * Get a module registered in liana. Returns the ModuleBag instance if no arguments are given.
     *
     * @param  string|null $module
     * @return mixed
     */
    function liana($module = null)
    {
        $modules = app()->make('liana');

        if ($module == null) {
            return $modules;
        }

        return $modules->get($module);
    }
}

if ( ! function_exists('setting'))
{
    /**
     * Get a liana setting
     *
     * @param  string $key
     * @return mixed
     */
    function setting($key)
    {
        return app()->make('liana')->get('settings')->get($key);
    }
}
