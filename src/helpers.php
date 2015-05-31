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

        return $modules->get($module);
    }
}
