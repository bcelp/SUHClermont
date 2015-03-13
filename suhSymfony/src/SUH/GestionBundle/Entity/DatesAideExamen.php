<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatesAideExamen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\DatesAideExamenRepository")
 */
class DatesAideExamen
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\EtudiantHandicape",inversedBy="datesAideExamen",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiantHandicape;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\AideExamen",cascade={"persist"})
     */
    private $aideExamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /*========================================================================*/
    /*========================================================================*/
    /*========================================================================*/

    public function __construct($etudiantHandicape,$aideExamen,$dateDebut,$dateFin)
    {
        $this->etudiantHandicape=$etudiantHandicape;
        $this->aideExamen=$aideExamen;
        $this->dateDebut=new \DateTime('01/01/2010');
        $this->dateFin=null;
    }

    /**
     * Set etudiantHandicape
     *
     * @param string $etudiantHandicape
     * @return DatesAideExamen
     */
    public function setEtudiantHandicape($etudiantHandicape)
    {
        $this->etudiantHandicape = $etudiantHandicape;
        $this->etudiantHandicape->setDatesAideExamen($this);
        return $this;
    }

    /**
     * Get etudiantHandicape
     *
     * @return string 
     */
    public function getEtudiantHandicape()
    {
        return $this->etudiantHandicape;
    }

    /**
     * Set aideExamen
     *
     * @param string $aideExamen
     * @return DatesAideExamen
     */
    public function setAideExamen($aideExamen)
    {
        $this->aideExamen = $aideExamen;

        return $this;
    }

    /**
     * Get aideExamen
     *
     * @return string 
     */
    public function getAideExamen()
    {
        return $this->aideExamen;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return DatesAideExamen
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return DatesAideExamen
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}
