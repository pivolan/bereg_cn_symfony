<?php

namespace Bereg\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Bereg\IndexBundle\Entity\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $text;

    /**
     * @ORM\ManyToOne(targetEntity="Product")
     */
    protected $parent;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param String $text
     * @return Product
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get text
     *
     * @return String
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set parent
     *
     * @param \Bereg\IndexBundle\Entity\Product $parent
     * @return Product
     */
    public function setParent(\Bereg\IndexBundle\Entity\Product $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Bereg\IndexBundle\Entity\Product
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function getTitleSlug()
    {
        return trim(str_replace('/', '', $this->getTitle()));
    }
}