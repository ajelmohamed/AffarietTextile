<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
/**
 * @ORM\Table(name="annonceur")
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceurRepository")
 * @UniqueEntity(fields="emailAnnonceur", message="Cet émail est déjà utilisé !")
 * @UniqueEntity(fields="numAnnonceur", message="Ce numéro est déjà utilisé !")
 * @UniqueEntity(fields="username", message="Username existe déjà !")
 */
class Annonceur implements AdvancedUserInterface
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
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAnnonceur", type="string", length=255, nullable=true)
     */
    private $nomAnnonceur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAnnonceur", type="string", length=255, nullable=true)
     */
    private $prenomAnnonceur;

    /**
     * @var int
     *
     * @ORM\Column(name="num_annonceur", type="integer")
     */
    private $numAnnonceur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_annonceur", type="string", length=255, unique=true)
     * @Assert\Email()
     */
    private $emailAnnonceur;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="image_annonceur", type="string", length=255)
     */
    private $imageAnnonceur;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmed", type="boolean")
     */
    private $confirmed;



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
     * Set nomAnnonceur
     *
     * @param string $nomAnnonceur
     *
     * @return Annonceur
     */
    public function setNomAnnonceur($nomAnnonceur)
    {
        $this->nomAnnonceur = $nomAnnonceur;

        return $this;
    }

    /**
     * Get nomAnnonceur
     *
     * @return string
     */
    public function getNomAnnonceur()
    {
        return $this->nomAnnonceur;
    }

    /**
     * Set numAnnonceur
     *
     * @param integer $numAnnonceur
     *
     * @return Annonceur
     */
    public function setNumAnnonceur($numAnnonceur)
    {
        $this->numAnnonceur = $numAnnonceur;

        return $this;
    }

    /**
     * Get numAnnonceur
     *
     * @return int
     */
    public function getNumAnnonceur()
    {
        return $this->numAnnonceur;
    }

    /**
     * Set emailAnnonceur
     *
     * @param string $emailAnnonceur
     *
     * @return Annonceur
     */
    public function setEmailAnnonceur($emailAnnonceur)
    {
        $this->emailAnnonceur = $emailAnnonceur;

        return $this;
    }

    /**
     * Get emailAnnonceur
     *
     * @return string
     */
    public function getEmailAnnonceur()
    {
        return $this->emailAnnonceur;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Annonceur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set imageAnnonceur
     *
     * @param string $imageAnnonceur
     *
     * @return Annonceur
     */
    public function setImageAnnonceur($imageAnnonceur)
    {
        $this->imageAnnonceur = $imageAnnonceur;

        return $this;
    }

    /**
     * Get imageAnnonceur
     *
     * @return string
     */
    public function getImageAnnonceur()
    {
        return $this->imageAnnonceur;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return [
            'ROLE_USER'
        ];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Annonceur
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


        /**
     * Set prenomAnnonceur
     *
     * @param string $prenomAnnonceur
     *
     * @return Annonceur
     */
    public function setPrenomAnnonceur($prenomAnnonceur)
    {
        $this->prenomAnnonceur = $prenomAnnonceur;

        return $this;
    }

    /**
     * Get prenomAnnonceur
     *
     * @return string
     */
    public function getPrenomAnnonceur()
    {
        return $this->prenomAnnonceur;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     *
     * @return Annonceur
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }


     public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->confirmed;
    }
}
