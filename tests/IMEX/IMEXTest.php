<?php
/**
 * IMEX: Import/Export Toolkit
 * A set of components for writing import/export scripts.
 *
 * @version   {$VERSION}
 * @copyright Copyright (c) 2016 Luke Visinoni <luke.visinoni@gmail.com>
 * @author    Luke Visinoni <luke.visinoni@gmail.com>
 */
namespace IMEXTest;

use IMEX\IMEX;
use PHPUnit_Framework_TestCase;

class IMEXTest extends PHPUnit_Framework_TestCase
{
    public function testIMEXInstanceOfIMEX()
    {
        $imex = new IMEX;
        $this->assertInstanceOf(IMEX::class, $imex);
    }
}
