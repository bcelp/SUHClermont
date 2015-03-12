<?php

namespace SUH\GestionBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
     * 
     * @ORM\OneToOne(targetEntity="SUH\GestionBundle\Entity\EtudiantHandicape",mappedBy="etudiant",cascade={"persist"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $etudiantSpecialise;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomEtudiant", type="string", length=30)
     */
    private $nomEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEtudiant", type="string", length=30)
     */
    private $prenomEtudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtudiante", type="text")
     */
    private $adresseEtudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseFamiliale", type="text")
     */
    private $adresseFamiliale;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     */
    private $telephone;        
    
     /**
     * @ORM\OneToMany(targetEntity="SUH\GestionBundle\Entity\EtudiantFormation",mappedBy="etudiant",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $listEtudiantFormation;
    
    
    
    /* ====================================================================== */
    /* ====================================================================== */
    /* ====================================================================== */

    public function __construct($nom,$prenom,$dateNaissance,$mail,$adresseFamiliale,
            $adresseEtudiante,$telephone)
    {
        $this->nomEtudiant=$nom;
        $this->prenomEtudiant=$prenom;
        $this->dateNaissance=new \DateTime('01/01/2015');
        $this->mail=$mail;
        $this->adresseFamiliale=$adresseFamiliale;
        $this->adresseEtudiante=$adresseEtudiante;
        $this->telephone=$telephone;
        $this->listEtudiantFormation=new ArrayCollection();
        $this->etudiantSpecialise=null;
    }
    
    public function getAge()
    {
        $dna = $this->dateNaissance->getTimestamp();
        $now = time();

        $age = date('Y',$now)-date('Y',$dna);
        if(strcmp(date('md', $dna),date('md', $now))>0) $age--;

        return $age;
    }
    
    public function setEtudiantSpecialise($etudiantSpecialise)
    {
        $this->etudiantSpecialise = $etudiantSpecialise;
        
        return $this;
    }
    
    public function getEtudaintSpecialise()
    {
        return $this->etudiantSpecialise;
    }
    
    public function addListEtudiantFormation($listEtudiantFormation)
    {
        $this->listEtudiantFormation[] = $listEtudiantFormation;
    }
    
    public function removeListEtudiantFormation($listEtudiantFormation)
    {
        $this->listEtudiantFormation->removeElement($listEtudiantFormation);
    }
    
    public function getListEtudiantFormation()
    {
        return $this->listEtudiantFormation;
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
     * Set nomEtudiant
     *
     * @param string $nomEtudiant
     * @return Etudiant
     */
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get nomEtudiant
     *
     * @return string 
     */
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * Set prenomEtudiant
     *
     * @param string $prenomEtudiant
     * @return Etudiant
     */
    public function setPrenomEtudiant($prenomEtudiant)
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    /**
     * Get prenomEtudiant
     *
     * @return string 
     */
    public function getPrenomEtudiant()
    {
        return $this->prenomEtudiant;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Etudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Etudiant
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresseEtudiante
     *
     * @param string $adresseEtudiante
     * @return Etudiant
     */
    public function setAdresseEtudiante($adresseEtudiante)
    {
        $this->adresseEtudiante = $adresseEtudiante;

        return $this;
    }

    /**
     * Get adresseEtudiante
     *
     * @return string 
     */
    public function getAdresseEtudiante()
    {
        return $this->adresseEtudiante;
    }

    /**
     * Set adresseFamiliale
     *
     * @param string $adresseFamiliale
     * @return Etudiant
     */
    public function setAdresseFamiliale($adresseFamiliale)
    {
        $this->adresseFamiliale = $adresseFamiliale;

        return $this;
    }

    /**
     * Get adresseFamiliale
     *
     * @return string 
     */
    public function getAdresseFamiliale()
    {
        return $this->adresseFamiliale;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Etudiant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
