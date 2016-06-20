<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 *
 * @ORM\Table(name="rate")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\RateRepository")
 */
class Rate
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
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;


    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $idUser;
    
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Rate
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idUser
     *
     * @param \UserBundle\Entity\Utilisateur $idUser
     *
     * @return Rate
     */
    public function setIdUser(\UserBundle\Entity\Utilisateur $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \UserBundle\Entity\Utilisateur
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idArtisan
     *
     * @param \UserBundle\Entity\Utilisateur $idArtisan
     *
     * @return Rate
     */
    public function setIdArtisan(\UserBundle\Entity\Utilisateur $idArtisan = null)
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
}
