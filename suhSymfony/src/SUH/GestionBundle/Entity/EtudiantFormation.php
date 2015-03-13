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
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Etudiant",inversedBy="listEtudiantFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;

    /**
     * @ORM\Id
     * @ORM\Column(name="annee", type="string", length=4)
     */
    private $annee;

    /**
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Formation",inversedBy="listEtudiantFormation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formation;

    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */
    
    public function __construct($etudiant,$annee,$formation)
    {
        $this->etudiant=$etudiant;
        $this->annee=$annee;
        $this->formation=$formation;
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
        $this->formation->addListEtudiantFormation($this);
        return $this;
    }

    public function getFormation()
    {
        return $this->formation;
    }
    
    

    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    public function getAnnee()
    {
        return $this->annee;
    }
}
