<?php

namespace Bereg\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Базовый класс для контроллеров приложения
 */
abstract class ControllerBase extends Controller
{
    /**
     * @override
     * @param null|\Symfony\Component\DependencyInjection\ContainerInterface $container
     * @return void
     */
    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $this->_loadServices();
    }

    /**
     * Загружает сервисы, требуемые контроллеру
     *
     * @return void
     */
    abstract protected function _loadServices();
}
