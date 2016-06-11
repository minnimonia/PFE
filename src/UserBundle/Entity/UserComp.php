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
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return UserComp
     */
    public function setIdUser($idUser) {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser() {
        return $this->idUser;
    }

    /**
     * Set idComp
     *
     * @param integer $idComp
     *
     * @return UserComp
     */
    public function setIdComp($idComp) {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return int
     */
    public function getIdComp() {
        return $this->idComp;
    }

}
