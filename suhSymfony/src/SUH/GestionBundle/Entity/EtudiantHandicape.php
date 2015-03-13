<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantHandicape
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\EtudiantHandicapeRepository")
 */
class EtudiantHandicape
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="SUH\GestionBundle\Entity\Etudiant",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,name="id",referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="qhandi", type="string", length=30)
     */
    private $qhandi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rqth", type="boolean")
     */
    private $rqth;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notificationSavs", type="boolean")
     */
    private $notificationSavs;

    /**
     * @var string
     *
     * @ORM\Column(name="amenagementEtude", type="text")
     */
    private $amenagementEtude;

    /**
     * @var string
     *
     * @ORM\Column(name="tauxInvalidite", type="text")
     */
    private $tauxInvalidite;

    /**
     * @var string
     *
     * @ORM\Column(name="suivi", type="string", length=30)
     */
    private $suivi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaj", type="date")
     */
    private $dateMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptifComplementaire", type="text")
     */
    private $descriptifComplementaire;

    /**
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Mdph",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $mdph;
    
    /**
     * @ORM\OneToMany(targetEntity="SUH\GestionBundle\Entity\EtudiantHandicapeHandicap",mappedBy="etudiantHandicape",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiantHandicapHandicap;

    /**
     * @ORM\OneToMany(targetEntity="SUH\GestionBundle\Entity\DatesAideExamen",mappedBy="etudiantHandicape",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $datesAideExamen;

    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */
    
    public function __construct($etudiant,$qhandi,$rqth,$notificationSavs,$amenagementEtude,
            $tauxInvalidite,$suivi,$dateMaj,$descriptifComplementaire,$mdph)
    {
        $this->etudiant=$etudiant;
        $this->id=$etudiant->getId();
        $this->qhandi=$qhandi;
        $this->rqth=$rqth;
        $this->notificationSavs=$notificationSavs;
        $this->amenagementEtude=$amenagementEtude;
        $this->tauxInvalidite=$tauxInvalidite;
        $this->suivi=$suivi;
        $this->dateMaj=new \DateTime('01/01/2016');
        $this->descriptifComplementaire=$descriptifComplementaire;
        $this->mdph=$mdph;
    }
    
    public function getDatesAideExamen()
    {
        return $this->datesAideExamen;
    }

    public function setDatesAideExamen($datesAideExamen)
    {
        $this->datesAideExamen = $datesAideExamen;
        
        return $this;
    }
    
    public function getEtudiantHandicapeHandicap()
    {
        return $this->etudiantHandicapHandicap;
    }

    public function setEtudiantHandicapeHandicap($etudiantHandicapHandicap)
    {
        $this->etudiantHandicapHandicap = $etudiantHandicapHandicap;
        
        return $this;
    }
    
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;
        
        return $this;
    }
    
    public function getMdph()
    {
        return $this->mdph;
    }

    public function setMdph($mdph)
    {
        $this->mdph = $mdph;
        
        return $this;
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
     * set id
     *
     * @param integer $id
     * @return EtudiantHandicape
     */
    public function setId($id)
    {
        $this->id=$id;
        
        return $this;
    }
    
    /**
     * Set qhandi
     *
     * @param string $qhandi
     * @return EtudiantHandicap
     */
    public function setQhandi($qhandi)
    {
        $this->qhandi = $qhandi;

        return $this;
    }

    /**
     * Get qhandi
     *
     * @return string 
     */
    public function getQhandi()
    {
        return $this->qhandi;
    }

    /**
     * Set rqth
     *
     * @param boolean $rqth
     * @return EtudiantHandicap
     */
    public function setRqth($rqth)
    {
        $this->rqth = $rqth;

        return $this;
    }

    /**
     * Get rqth
     *
     * @return boolean 
     */
    public function getRqth()
    {
        return $this->rqth;
    }

    /**
     * Set notificationSavs
     *
     * @param boolean $notificationSavs
     * @return EtudiantHandicap
     */
    public function setNotificationSavs($notificationSavs)
    {
        $this->notificationSavs = $notificationSavs;

        return $this;
    }

    /**
     * Get notificationSavs
     *
     * @return boolean 
     */
    public function getNotificationSavs()
    {
        return $this->notificationSavs;
    }

    /**
     * Set amenagementEtude
     *
     * @param string $amenagementEtude
     * @return EtudiantHandicap
     */
    public function setAmenagementEtude($amenagementEtude)
    {
        $this->amenagementEtude = $amenagementEtude;

        return $this;
    }

    /**
     * Get amenagementEtude
     *
     * @return string 
     */
    public function getAmenagementEtude()
    {
        return $this->amenagementEtude;
    }

    /**
     * Set tauxInvalidite
     *
     * @param string $tauxInvalidite
     * @return EtudiantHandicap
     */
    public function setTauxInvalidite($tauxInvalidite)
    {
        $this->tauxInvalidite = $tauxInvalidite;

        return $this;
    }

    /**
     * Get tauxInvalidite
     *
     * @return string 
     */
    public function getTauxInvalidite()
    {
        return $this->tauxInvalidite;
    }

    /**
     * Set suivi
     *
     * @param string $suivi
     * @return EtudiantHandicap
     */
    public function setSuivi($suivi)
    {
        $this->suivi = $suivi;

        return $this;
    }

    /**
     * Get suivi
     *
     * @return string 
     */
    public function getSuivi()
    {
        return $this->suivi;
    }

    /**
     * Set dateMaj
     *
     * @param \DateTime $dateMaj
     * @return EtudiantHandicap
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return \DateTime 
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set descriptifComplementaire
     *
     * @param string $descriptifComplementaire
     * @return EtudiantHandicap
     */
    public function setDescriptifComplementaire($descriptifComplementaire)
    {
        $this->descriptifComplementaire = $descriptifComplementaire;

        return $this;
    }

    /**
     * Get descriptifComplementaire
     *
     * @return string 
     */
    public function getDescriptifComplementaire()
    {
        return $this->descriptifComplementaire;
    }

}
