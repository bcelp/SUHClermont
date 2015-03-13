<?php

namespace Proxies\__CG__\SUH\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Etudiant extends \SUH\GestionBundle\Entity\Etudiant implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'id', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'nomEtudiant', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'prenomEtudiant', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'dateNaissance', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'mail', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'adresseEtudiante', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'adresseFamiliale', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'telephone', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'listEtudiantFormation');
        }

        return array('__isInitialized__', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'id', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'nomEtudiant', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'prenomEtudiant', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'dateNaissance', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'mail', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'adresseEtudiante', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'adresseFamiliale', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'telephone', '' . "\0" . 'SUH\\GestionBundle\\Entity\\Etudiant' . "\0" . 'listEtudiantFormation');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Etudiant $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addListEtudiantFormation($listEtudiantFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addListEtudiantFormation', array($listEtudiantFormation));

        return parent::addListEtudiantFormation($listEtudiantFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeListEtudiantFormation($listEtudiantFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeListEtudiantFormation', array($listEtudiantFormation));

        return parent::removeListEtudiantFormation($listEtudiantFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getListEtudiantFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListEtudiantFormation', array());

        return parent::getListEtudiantFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEtudiant($nomEtudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEtudiant', array($nomEtudiant));

        return parent::setNomEtudiant($nomEtudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEtudiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEtudiant', array());

        return parent::getNomEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomEtudiant($prenomEtudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomEtudiant', array($prenomEtudiant));

        return parent::setPrenomEtudiant($prenomEtudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomEtudiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomEtudiant', array());

        return parent::getPrenomEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance($dateNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', array($dateNaissance));

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', array());

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail($mail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', array($mail));

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', array());

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseEtudiante($adresseEtudiante)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseEtudiante', array($adresseEtudiante));

        return parent::setAdresseEtudiante($adresseEtudiante);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseEtudiante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseEtudiante', array());

        return parent::getAdresseEtudiante();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseFamiliale($adresseFamiliale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseFamiliale', array($adresseFamiliale));

        return parent::setAdresseFamiliale($adresseFamiliale);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseFamiliale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseFamiliale', array());

        return parent::getAdresseFamiliale();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

}
