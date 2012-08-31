<?php

namespace Bereg\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Route("/{name}", name="index")
	 * @Template()
	 */
	public function indexAction($name)
    {
        return array('name' => $name);
    }
}
