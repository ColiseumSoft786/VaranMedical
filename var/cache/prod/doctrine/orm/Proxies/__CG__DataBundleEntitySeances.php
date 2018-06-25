<?php

namespace Proxies\__CG__\DataBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Seances extends \DataBundle\Entity\Seances implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'heurDebut', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'dispo', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'absence', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'heurFin', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'id', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'calendrie'];
        }

        return ['__isInitialized__', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'heurDebut', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'dispo', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'absence', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'heurFin', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'id', '' . "\0" . 'DataBundle\\Entity\\Seances' . "\0" . 'calendrie'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Seances $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setHeurDebut($heurDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeurDebut', [$heurDebut]);

        return parent::setHeurDebut($heurDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeurDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeurDebut', []);

        return parent::getHeurDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDispo($dispo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDispo', [$dispo]);

        return parent::setDispo($dispo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDispo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDispo', []);

        return parent::getDispo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbsence($absence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbsence', [$absence]);

        return parent::setAbsence($absence);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsence', []);

        return parent::getAbsence();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeurFin($heurFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeurFin', [$heurFin]);

        return parent::setHeurFin($heurFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeurFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeurFin', []);

        return parent::getHeurFin();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalendrie(\DataBundle\Entity\Calendries $calendrie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalendrie', [$calendrie]);

        return parent::setCalendrie($calendrie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalendrie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalendrie', []);

        return parent::getCalendrie();
    }

}
