<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="produit", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $produit;

     /**
     * @ORM\ManyToOne(targetEntity="Archive")
     * @ORM\JoinColumn(name="archive", referencedColumnName="id" , nullable=true , onDelete="SET NULL")
     */
    private $archive;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set produit
     *
     * @param \App\Entity\Produit $produit
     *
     * @return Image
     */
    public function setProduit(\App\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \App\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set archive
     *
     * @param \App\Entity\Archive $archive
     *
     * @return Image
     */
    public function setArchive(\App\Entity\Archive $archive = null)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return \App\Entity\Archive
     */
    public function getArchive()
    {
        return $this->archive;
    }
}
