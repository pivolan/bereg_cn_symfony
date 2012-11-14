<?php

namespace Bereg\IndexBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bereg\IndexBundle\Entity\Product;

class LoadProductData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setTitle('hello first page');
        $product->setText(' this is a text');

        $manager->persist($product);
        $manager->flush();
    }
}
