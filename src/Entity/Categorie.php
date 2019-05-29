<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="nomCategorie", type="string", length=255, unique=true)
     */
    private $nomCategorie;

    /**
     * @var string
     * @Assert\Image()
     * @ORM\Column(name="image", type="string", length=255)
     */
     private $image;


    /**
     * @ORM\OneToMany(targetEntity="SousCategorie", mappedBy="categorie" , cascade={"remove"})
     */
    private $sousCategorie;


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
     * Set nomCategorie
     *
     * @param string $nomCategorie
     *
     * @return Categorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Categorie
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sousCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sousCategorie
     *
     * @param \App\Entity\SousCategorie $sousCategorie
     *
     * @return Categorie
     */
    public function addSousCategorie(\App\Entity\SousCategorie $sousCategorie)
    {
        $this->sousCategorie[] = $sousCategorie;

        return $this;
    }

    /**
     * Remove sousCategorie
     *
     * @param \App\Entity\SousCategorie $sousCategorie
     */
    public function removeSousCategorie(\App\Entity\SousCategorie $sousCategorie)
    {
        $this->sousCategorie->removeElement($sousCategorie);
    }

    /**
     * Get sousCategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }
}
