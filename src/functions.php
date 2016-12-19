<?php
/**
 * IMEX: Import/Export Toolkit
 * A set of components for writing import/export scripts.
 *
 * @version   {$VERSION}
 *
 * @copyright Copyright (c) 2016 Luke Visinoni <luke.visinoni@gmail.com>
 * @author    Luke Visinoni <luke.visinoni@gmail.com>
 */
use Symfony\Component\VarDumper\VarDumper;

/**
 * Is this command line interface?
 *
 * @return bool
 */
function is_cli()
{
    return php_sapi_name() === 'cli';
}

if (!function_exists('dd')) {
    /**
     * Dump and Die.
     *
     * @param mixed $data The data to dump
     * @param bool  $exit Whether or not to die (exit) after dumping
     */
    function dd($data, $exit = true)
    {
        VarDumper::dump($data);
        if ($exit) {
            exit;
        }
    }
}
