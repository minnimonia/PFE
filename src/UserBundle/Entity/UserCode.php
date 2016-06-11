<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCode
 *
 * @ORM\Table(name="user_code")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserCodeRepository")
 */
class UserCode
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
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \CodePostal
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\CodePostal")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idCode", referencedColumnName="id")
     * })
     */
    private $idCode;


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
     * @return UserCode
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
     * Set idCode
     *
     * @param \UserBundle\Entity\CodePostal $idCode
     *
     * @return UserCode
     */
    public function setIdCode(\UserBundle\Entity\CodePostal $idCode = null)
    {
        $this->idCode = $idCode;

        return $this;
    }

    /**
     * Get idCode
     *
     * @return \UserBundle\Entity\CodePostal
     */
    public function getIdCode()
    {
        return $this->idCode;
    }
}
