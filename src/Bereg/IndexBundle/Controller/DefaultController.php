<?php

namespace Bereg\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends ControllerBase
{
    /**
     * Репозиторий для объектов Product
     * @var \Bereg\IndexBundle\Entity\ProductRepository
     */
    protected $_productRepository;

    /**
     * @Route("/")
     * @Template()
     *
     * @param Request $request
     * @return array
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/{productId}")
     * @Template()
     *
     * @param Request $request
     * @return array
     */
    public function productAction($productId)
    {
        $product = $this->_productRepository->find($productId);
        return array('product' => $product);
    }

    /**
     * Загружает сервисы, требуемые контроллеру
     *
     * @return void
     */
    protected function _loadServices()
    {
        $this->_productRepository = $this->getDoctrine()->getManager()->getRepository('BeregIndexBundle:Product');
    }
}
