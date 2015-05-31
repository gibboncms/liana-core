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

if ( ! function_exists('markdown'))
{
    /**
     * Parse a string with liana's registered markdown parser
     *
     * @param  string $markdown
     * @return string
     */
    function markdown($markdown)
    {
        $parser = app()->make('liana.markdown');

        return $parser->parse($markdown);
    }
}
