<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="nomprod", type="string", length=255)
     */
    private $nomprod;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id" , onDelete="CASCADE")
     */
    private $categorie;

      /**
     * @ORM\ManyToOne(targetEntity="SousCategorie")
     * @ORM\JoinColumn(name="sousCategorie", referencedColumnName="id" , onDelete="CASCADE")
     */
    private $sousCategorie;


    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(name="region", referencedColumnName="id" , onDelete="CASCADE")
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(name="ville", referencedColumnName="id" , onDelete="CASCADE")
     */
    private $ville;


    /**
    * @ORM\ManyToOne(targetEntity="Annonceur")
    * @ORM\JoinColumn(name="id_annonceur", referencedColumnName="id" , onDelete="CASCADE")
    */
   private $id_annonceur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="datetime")
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="afficherNum", type="boolean")
     */
    private $afficherNum;


    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="produit")
     */
    private $images;


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
     * Set nomprod
     *
     * @param string $nomprod
     *
     * @return Produit
     */
    public function setNomprod($nomprod)
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    /**
     * Get nomprod
     *
     * @return string
     */
    public function getNomprod()
    {
        return $this->nomprod;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }



    

    /**
     * Set idAnnonceur
     *
     * @param \App\Entity\Annonceur $idAnnonceur
     *
     * @return Produit
     */
    public function setIdAnnonceur(\App\Entity\Annonceur $idAnnonceur = null)
    {
        $this->id_annonceur = $idAnnonceur;

        return $this;
    }

    /**
     * Get idAnnonceur
     *
     * @return \App\Entity\Annonceur
     */
    public function getIdAnnonceur()
    {
        return $this->id_annonceur;
    }

    /**
     * Set categorie
     *
     * @param \App\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\App\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \App\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }



    /**
     * Set region
     *
     * @param \App\Entity\Region $region
     *
     * @return Produit
     */
    public function setRegion(\App\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \App\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return Produit
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Produit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sousCategorie
     *
     * @param \App\Entity\SousCategorie $sousCategorie
     *
     * @return Produit
     */
    public function setSousCategorie(\App\Entity\SousCategorie $sousCategorie = null)
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    /**
     * Get sousCategorie
     *
     * @return \App\Entity\SousCategorie
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }

    /**
     * Set ville
     *
     * @param \App\Entity\Ville $ville
     *
     * @return Produit
     */
    public function setVille(\App\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \App\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set afficherNum
     *
     * @param boolean $afficherNum
     *
     * @return Produit
     */
    public function setAfficherNum($afficherNum)
    {
        $this->afficherNum = $afficherNum;

        return $this;
    }

    /**
     * Get afficherNum
     *
     * @return boolean
     */
    public function getAfficherNum()
    {
        return $this->afficherNum;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \App\Entity\Image $image
     *
     * @return Produit
     */
    public function addImage(\App\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \App\Entity\Image $image
     */
    public function removeImage(\App\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
