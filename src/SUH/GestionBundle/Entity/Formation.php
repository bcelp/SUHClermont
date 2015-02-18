<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\FormationRepository")
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome", type="string", length=50)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="composante", type="string", length=255)
     */
    private $composante;

    /**
     * @var string
     *
     * @ORM\Column(name="filiere", type="string", length=255)
     */
    private $filiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle", type="smallint")
     */
    private $cycle;

    /**
     * @var string
     * 
     * @ORM\Column(name="etablissement", type="string", length=100)
     */
    private $etablissement;
    
    
    
    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */

    public function __construct($diplome,$composante,$filiere,$cycle,$etablissement)
    {
        $this->diplome=$diplome;
        $this->composante=$composante;
        $this->filiere=$filiere;
        $this->cycle=$cycle;
        $this->etablissement=$etablissement;
    }
    

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
     * Set diplome
     *
     * @param string $diplome
     * @return Formation
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set composante
     *
     * @param string $composante
     * @return Formation
     */
    public function setComposante($composante)
    {
        $this->composante = $composante;

        return $this;
    }

    /**
     * Get composante
     *
     * @return string 
     */
    public function getComposante()
    {
        return $this->composante;
    }

    /**
     * Set filiere
     *
     * @param string $filiere
     * @return Formation
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set cycle
     *
     * @param integer $cycle
     * @return Formation
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return integer 
     */
    public function getCycle()
    {
        return $this->cycle;
    }
    
     /**
     * Set etablissement
     *
     * @param string $etablissement
     * @return Formation
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
    
}
