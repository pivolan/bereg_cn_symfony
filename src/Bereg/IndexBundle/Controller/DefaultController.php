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
     * Показывает страницу оборудования
     * @Route("/{slug}/{productId}")
     * @Template()
     *
     * @param $slug
     * @param $productId
     * @internal param \Symfony\Component\HttpFoundation\Request $request
     * @return array
     */
    public function productAction($slug, $productId)
    {
        /** @var $product \Bereg\IndexBundle\Entity\Product */
        $product = $this->_productRepository->find($productId);
        if ($product->getTitleSlug() != $slug) {
            return $this->redirect($this->generateUrl('bereg_index_default_product', array('slug' => $product->getTitleSlug(), 'productId' => $productId)), 301);
        }
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
