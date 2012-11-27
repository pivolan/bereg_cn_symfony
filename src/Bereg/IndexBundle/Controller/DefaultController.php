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
     * @internal param \Symfony\Component\HttpFoundation\Request $request
     * @return array
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/proizvodstvennye-linii-iz-kitaya")
     * @Template()
     */
    public function productionLinesAction()
    {
        return array();
    }

    /**
     * @Route("/mini-zavody-iz-kitaya")
     * @Template()
     */
    public function miniZavodyAction()
    {
        return array();
    }

    /**
     * @Route("/oborudovanie-iz-kitaya")
     * @Template()
     */
    public function oborudovanieAction()
    {
        return array();
    }

    /**
     * @Route("/uslugi-kompanii-bereg")
     * @Template()
     */
    public function uslugiAction()
    {
        return array();
    }

    /**
     * @Route("/poisk-proizvoditelei-i-tovarov-v-kitae")
     * @Template()
     */
    public function poiskAction()
    {
        return array();
    }

    /**
     * @Route("/kompaniya-bereg-import-tovarov-i-oborudovaniya-iz-kitaya")
     * @Template()
     */
    public function aboutUsAction()
    {
        return array();
    }

    /**
     * @Route("/kontakty-kompanii-bereg")
     * @Template()
     */
    public function contactsAction()
    {
        return array();
    }

    /**
     * @Route("/perevod-s-kitaiskogo-i-na-kitaiskii")
     * @Template()
     */
    public function perevodAction()
    {
        return array();
    }

    /**
     * @Route("/articles")
     * @Template()
     */
    public function articlesAction()
    {
        return array();
    }

    /**
     * @Route("/etapy-postavki-tovarov-i-oborudovaniya")
     * @Template()
     */
    public function kakRabotaemAction()
    {
        return array();
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
