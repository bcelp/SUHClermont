<?php

namespace SUH\GestionBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\OneToOne(targetEntity="SUH\GestionBundle\Entity\Etudiant",inversedBy="etudiantSpecialise",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,name="id",referencedColumnName="id",onDelete="CASCADE")
     */
    private $etudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="qhandi", type="string", length=30,nullable=true)
     */
    private $qhandi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rqth", type="boolean",nullable=true)
     */
    private $rqth;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notificationSavs", type="boolean",nullable=true)
     */
    private $notificationSavs;

    /**
     * @var string
     *
     * @ORM\Column(name="amenagementEtude", type="text",nullable=true)
     */
    private $amenagementEtude;

    /**
     * @var string
     *
     * @ORM\Column(name="tauxInvalidite", type="text",nullable=true)
     */
    private $tauxInvalidite;

    /**
     * @var string
     *
     * @ORM\Column(name="suivi", type="string", length=30,nullable=true)
     */
    private $suivi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaj", type="date",nullable=true)
     */
    private $dateMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptifComplementaire", type="text",nullable=true)
     */
    private $descriptifComplementaire;

    /**
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Mdph",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $mdph;
   
    /**
     * 
     * @ORM\ManyToMany(targetEntity="SUH\GestionBundle\Entity\Handicap",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $handicap;

    /**
     * @ORM\OneToMany(targetEntity="SUH\GestionBundle\Entity\DatesAideExamen",mappedBy="etudiantHandicape",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $datesAideExamen;

    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */
    
    public function __construct($etudiant,$qhandi,$rqth,$notificationSavs,$amenagementEtude,
            $tauxInvalidite,$suivi,$dateMaj,$descriptifComplementaire,$mdph,$handicap)
    {
        $this->setEtudiant($etudiant);
        $this->id=$etudiant->getId();
        $this->qhandi=$qhandi;
        $this->rqth=$rqth;
        $this->notificationSavs=$notificationSavs;
        $this->amenagementEtude=$amenagementEtude;
        $this->tauxInvalidite=$tauxInvalidite;
        $this->suivi=$suivi;
        if(empty($dateMaj))
        {
            $this->dateMaj = new \DateTime('now');
            //$this->dateMaj = $dateNow->format('d/m/Y');
        }
        else
        {
           $this->dateMaj=$dateMaj; 
        }
        $this->descriptifComplementaire=$descriptifComplementaire;
        $this->mdph=$mdph;
        $this->handicap=new ArrayCollection();
        $this->datesAideExamen=new ArrayCollection();
        $this->addHandicap($handicap);
    }
    
    /*public function __construct($etudiant,$idMdph,$handicap,$examen)
    {
        $this->setEtudiant($etudiant);
        $this->id=$etudiant->getId();
        $this->mdph = $idMdph;
        $this->handicap=new ArrayCollection();
        $this->datesAideExamen=new ArrayCollection();
        $this->addHandicap($handicap);
        $this->addDatesAideExamen($examen);
    }*/
    
    public function getDatesAideExamen()
    {
        return $this->datesAideExamen;
    }

    public function addDatesAideExamen($datesAideExamen)
    {
        $this->datesAideExamen[] = $datesAideExamen;
        
        return $this;
    }
    
    public function removeDatesAideExamen($datesAideExamen)
    {
        $this->datesAideExamem->removeElement($datesAideExamen);
        
        return $this;
    }
    
    public function getHandicap()
    {
        return $this->handicap;
    }

    public function addHandicap($handicap)
    {
        $this->handicap[] = $handicap;
        
        return $this;
    }
    
    public function removeHandicap($handicap)
    {
        $this->handicap->removeElement($handicap);
        
        return $this;
    }
    
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;
        $this->etudiant->setEtudiantSpecialise($this);
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
