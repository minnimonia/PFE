<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 *
 * @ORM\Table(name="affectation")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\AffectationRepository")
 */
class Affectation
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
     * @var \Tache
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Tache")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idTache", referencedColumnName="id")
     * })
     */
    private $idTache;

    /**
     * @var \Ouvrier
     *
     * @ORM\ManyToOne(targetEntity="PlanningBundle\Entity\Ouvrier")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="idOuvrier", referencedColumnName="id")
     * })
     */
    private $idOuvrier;


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
     * Set idTache
     *
     * @param \PlanningBundle\Entity\Tache $idTache
     *
     * @return Affectation
     */
    public function setIdTache(\PlanningBundle\Entity\Tache $idTache = null)
    {
        $this->idTache = $idTache;

        return $this;
    }

    /**
     * Get idTache
     *
     * @return \PlanningBundle\Entity\Tache
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     * Set idOuvrier
     *
     * @param \PlanningBundle\Entity\Ouvrier $idOuvrier
     *
     * @return Affectation
     */
    public function setIdOuvrier(\PlanningBundle\Entity\Ouvrier $idOuvrier = null)
    {
        $this->idOuvrier = $idOuvrier;

        return $this;
    }

    /**
     * Get idOuvrier
     *
     * @return \PlanningBundle\Entity\Ouvrier
     */
    public function getIdOuvrier()
    {
        return $this->idOuvrier;
    }
}
