<?php

namespace SUH\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantHandicapeHandicap
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SUH\GestionBundle\Entity\EtudiantHandicapeHandicapRepository")
 */
class EtudiantHandicapeHandicap
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\EtudiantHandicape",inversedBy="EtudiantHandicapeHandicap",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiantHandicape;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SUH\GestionBundle\Entity\Handicap",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $handicap;


    
    /*========================================================================*/
    /*========================================================================*/
    /*========================================================================*/
    
    public function __construct($etudiantHandicape,$handicap)
    {
        $this->etudiantHandicape=$etudiantHandicape;
        $this->handicap=$handicap;
    }

    /**
     * Set etudiantHandicape
     *
     * @param string $etudiantHandicape
     * @return EtudiantHandicapeHandicape
     */
    public function setEtudiantHandicape($etudiantHandicape)
    {
        $this->etudiantHandicape = $etudiantHandicape;
        $this->etudiantHandicape->setEtudiantHandicapeHandicap($this);
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
     * Set handicap
     *
     * @param string $handicap
     * @return EtudiantHandicapeHandicap
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return string 
     */
    public function getHandicap()
    {
        return $this->handicap;
    }
}
