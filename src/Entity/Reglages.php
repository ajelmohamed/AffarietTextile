<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="reglages")
 * @ORM\Entity(repositoryClass="App\Repository\ReglagesRepository")
 */
class Reglages
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
     * @var bool
     *
     * @ORM\Column(name="publicite", type="boolean")
     */
    private $publicite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;



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
     * Set publicite
     *
     * @param boolean $publicite
     *
     * @return Reglages
     */
    public function setPublicite($publicite)
    {
        $this->publicite = $publicite;

        return $this;
    }

    /**
     * Get publicite
     *
     * @return bool
     */
    public function getPublicite()
    {
        return $this->publicite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Reglages
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

