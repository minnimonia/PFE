<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserComp
 *
 * @ORM\Table(name="user_comp")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserCompRepository")
 */
class UserComp {

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
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Competence
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Competence")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idComp", referencedColumnName="id")
     * })
     */
    private $idComp;


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
     * Set idUser
     *
     * @param \UserBundle\Entity\Utilisateur $idUser
     *
     * @return UserComp
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
     * Set idComp
     *
     * @param \UserBundle\Entity\Competence $idComp
     *
     * @return UserComp
     */
    public function setIdComp(\UserBundle\Entity\Competence $idComp = null)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return \UserBundle\Entity\Competence
     */
    public function getIdComp()
    {
        return $this->idComp;
    }
}
