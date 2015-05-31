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

if ( ! function_exists('elixir'))
{
    /**
    * Get the path to a versioned Elixir file.
    *
    * @param  string  $file
    * @return string
    */
    function elixir($file)
    {
        static $manifest = null;

        if (is_null($manifest)) {
            $manifest = json_decode(file_get_contents(
                env('PUBLIC_PATH', app()->basePath()).'/public/build/rev-manifest.json'), true);
        }

        if (isset($manifest[$file])) {
            return '/build/'.$manifest[$file];
        }
        
        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }
}
