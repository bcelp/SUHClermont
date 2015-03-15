<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AideExamen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\AideExamenRepository")
 */
class AideExamen
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
     * @ORM\Column(name="amenagementExamens", type="text",nullable=true)
     */
    private $amenagementExamens;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tempsMajore", type="boolean",nullable=true)
     */
    private $tempsMajore;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autresMesures", type="boolean",nullable=true)
     */
    private $autresMesures;

    /**
     * @var string
     *
     * @ORM\Column(name="delocalisationExamen", type="text",nullable=true)
     */
    private $delocalisationExamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateValidite", type="date",nullable=true)
     */
    private $dateValidite;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeAvisMedical", type="text",nullable=true)
     */
    private $dureeAvisMedical;

    
    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */
    
    public function __construct($amenagementExamen,$tempsMajore,$autresMesures,
            $delocalisationExamen,$dateValidite,$dureeAvisMedical)
    {
        $this->amenagementExamens=$amenagementExamen;
        $this->tempsMajore=$tempsMajore;
        $this->autresMesures=$autresMesures;
        $this->delocalisationExamen=$delocalisationExamen;
        $this->dateValidite= $dateValidite;
        $this->dureeAvisMedical=$dureeAvisMedical;
    }
    
    //public function __construct(){}

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
     * Set amenagementExamens
     *
     * @param string $amenagementExamens
     * @return AideExamen
     */
    public function setAmenagementExamens($amenagementExamens)
    {
        $this->amenagementExamens = $amenagementExamens;

        return $this;
    }

    /**
     * Get amenagementExamens
     *
     * @return string 
     */
    public function getAmenagementExamens()
    {
        return $this->amenagementExamens;
    }

    /**
     * Set tempsMajore
     *
     * @param boolean $tempsMajore
     * @return AideExamen
     */
    public function setTempsMajore($tempsMajore)
    {
        $this->tempsMajore = $tempsMajore;

        return $this;
    }

    /**
     * Get tempsMajore
     *
     * @return boolean 
     */
    public function getTempsMajore()
    {
        return $this->tempsMajore;
    }

    /**
     * Set autresMesures
     *
     * @param boolean $autresMesures
     * @return AideExamen
     */
    public function setAutresMesures($autresMesures)
    {
        $this->autresMesures = $autresMesures;

        return $this;
    }

    /**
     * Get autresMesures
     *
     * @return boolean 
     */
    public function getAutresMesures()
    {
        return $this->autresMesures;
    }

    /**
     * Set delocalisationExamen
     *
     * @param string $delocalisationExamen
     * @return AideExamen
     */
    public function setDelocalisationExamen($delocalisationExamen)
    {
        $this->delocalisationExamen = $delocalisationExamen;

        return $this;
    }

    /**
     * Get delocalisationExamen
     *
     * @return string 
     */
    public function getDelocalisationExamen()
    {
        return $this->delocalisationExamen;
    }

    /**
     * Set dateValidite
     *
     * @param \DateTime $dateValidite
     * @return AideExamen
     */
    public function setDateValidite($dateValidite)
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    /**
     * Get dateValidite
     *
     * @return \DateTime 
     */
    public function getDateValidite()
    {
        return $this->dateValidite;
    }

    /**
     * Set dureeAvisMedical
     *
     * @param string $dureeAvisMedical
     * @return AideExamen
     */
    public function setDureeAvisMedical($dureeAvisMedical)
    {
        $this->dureeAvisMedical = $dureeAvisMedical;

        return $this;
    }

    /**
     * Get dureeAvisMedical
     *
     * @return string 
     */
    public function getDureeAvisMedical()
    {
        return $this->dureeAvisMedical;
    }
}
