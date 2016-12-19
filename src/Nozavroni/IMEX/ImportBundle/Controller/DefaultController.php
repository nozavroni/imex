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

namespace Nozavroni\IMEX\ImportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NozavroniIMEXImportBundle:Default:index.html.twig');
    }
}
