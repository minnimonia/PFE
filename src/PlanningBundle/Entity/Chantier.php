<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Utilisateur;
/**
 * Chantier
 *
 * @ORM\Table(name="chantier")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ChantierRepository")
 */
class Chantier
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
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idArtisan", referencedColumnName="id")
     * })
     */
    private $idArtisan;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idParticulier", referencedColumnName="id")
     * })
     */
    private $idParticulier;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Chantier
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chantier
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
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Chantier
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Chantier
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Chantier
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set idArtisan
     *
     * @param \UserBundle\Entity\Utilisateur $idArtisan
     *
     * @return Chantier
     */
    public function setIdArtisan(\UserBundle\Entity\Utilisateur $idArtisan)
    {
        $this->idArtisan = $idArtisan;

        return $this;
    }

    /**
     * Get idArtisan
     *
     * @return \UserBundle\Entity\Utilisateur
     */
    public function getIdArtisan()
    {
        return $this->idArtisan;
    }

    /**
     * Set idParticulier
     *
     * @param \UserBundle\Entity\Utilisateur $idParticulier
     *
     * @return Chantier
     */
    public function setIdParticulier(\UserBundle\Entity\Utilisateur $idParticulier = null)
    {
        $this->idParticulier = $idParticulier;

        return $this;
    }

    /**
     * Get idParticulier
     *
     * @return \UserBundle\Entity\Utilisateur
     */
    public function getIdParticulier()
    {
        return $this->idParticulier;
    }
}
