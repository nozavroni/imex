<?php
/**
 * IMEX: Import/Export Toolkit
 * A set of components for writing import/export scripts.
 *
 * @version   {$VERSION}
 * @copyright Copyright (c) 2016 Luke Visinoni <luke.visinoni@gmail.com>
 * @author    Luke Visinoni <luke.visinoni@gmail.com>
 */
namespace Nozavroni\IMEX\ImportBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class NozavroniIMEXImportBundle
 * @package Nozavroni\IMEX\ImportBundle
 */
class NozavroniIMEXImportBundle extends Bundle
{
    /**
     * Boots the Bundle.
     */
    public function boot()
    {

    }

    /**
     * Shutdowns the Bundle.
     */
    public function shutdown()
    {

    }

    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {

    }
}
