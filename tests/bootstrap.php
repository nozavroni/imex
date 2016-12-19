<?php
/**
 * IMEX: Import/Export Toolkit
 * A set of components for writing import/export scripts.
 *
 * @version   {$VERSION}
 * @copyright Copyright (c) 2016 Luke Visinoni <luke.visinoni@gmail.com>
 * @author    Luke Visinoni <luke.visinoni@gmail.com>
 */
require_once __DIR__ . '/../vendor/autoload.php';

function dd($in, $exit = true)
{
    var_dump($in);
    if ($exit) {
        exit;
    }
}