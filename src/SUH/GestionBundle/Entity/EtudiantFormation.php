<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantFormation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\EtudiantFormationRepository")
 */
class EtudiantFormation
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Etudiant",inversedBy="listEtudiantFormation",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $etudiant;

    /**
     * @ORM\Id
     * @ORM\Column(name="anneeScolaire", type="string", length=9)
     */
    private $anneeScolaire;

    /**
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Formation",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $formation;

    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */
    
    public function __construct($etudiant,$anneeScolaire,$formation)
    {
        $this->setEtudiant($etudiant);
        $this->anneeScolaire=$anneeScolaire;
        $this->setFormation($formation);
    }
    
    public function setEtudiant($Etudiant)
    {
        $this->etudiant = $Etudiant;
        $this->etudiant->addListEtudiantFormation($this);
        return $this;
    }

    public function getEtudiant()
    {
        return $this->etudiant;
    }

    public function setFormation($formation)
    {
        $this->formation = $formation;
        
        return $this;
    }

    public function getFormation()
    {
        return $this->formation;
    }
    
    

    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }
}
