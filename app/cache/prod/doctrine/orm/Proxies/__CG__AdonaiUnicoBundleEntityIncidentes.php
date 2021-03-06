<?php

namespace Proxies\__CG__\Adonai\UnicoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Incidentes extends \Adonai\UnicoBundle\Entity\Incidentes implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idIncidente', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'fechaIncidente', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'observacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idAsignacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idMat', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idPeriodo');
        }

        return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idIncidente', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'fechaIncidente', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'observacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idAsignacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idMat', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Incidentes' . "\0" . 'idPeriodo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Incidentes $proxy) {
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
    public function getIdIncidente()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdIncidente();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdIncidente', array());

        return parent::getIdIncidente();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaIncidente($fechaIncidente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaIncidente', array($fechaIncidente));

        return parent::setFechaIncidente($fechaIncidente);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaIncidente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaIncidente', array());

        return parent::getFechaIncidente();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacion($observacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacion', array($observacion));

        return parent::setObservacion($observacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacion', array());

        return parent::getObservacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAsignacion(\Adonai\UnicoBundle\Entity\Asignaciones $idAsignacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAsignacion', array($idAsignacion));

        return parent::setIdAsignacion($idAsignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAsignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAsignacion', array());

        return parent::getIdAsignacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMat(\Adonai\UnicoBundle\Entity\Matriculas $idMat = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMat', array($idMat));

        return parent::setIdMat($idMat);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMat', array());

        return parent::getIdMat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPeriodo(\Adonai\UnicoBundle\Entity\Periodos $idPeriodo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPeriodo', array($idPeriodo));

        return parent::setIdPeriodo($idPeriodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPeriodo', array());

        return parent::getIdPeriodo();
    }

}
