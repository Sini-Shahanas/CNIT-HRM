<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EmployeeLanguage extends \OrangeHRM\Entity\EmployeeLanguage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'language', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'fluency', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'competency', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'comment', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'language', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'fluency', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'competency', '' . "\0" . 'OrangeHRM\\Entity\\EmployeeLanguage' . "\0" . 'comment', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EmployeeLanguage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getEmployee(): \OrangeHRM\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployee', []);

        return parent::getEmployee();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployee(\OrangeHRM\Entity\Employee $employee): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployee', [$employee]);

        parent::setEmployee($employee);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage(): \OrangeHRM\Entity\Language
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage(\OrangeHRM\Entity\Language $language): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$language]);

        parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getFluency(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getFluency();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFluency', []);

        return parent::getFluency();
    }

    /**
     * {@inheritDoc}
     */
    public function setFluency(int $fluency): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFluency', [$fluency]);

        parent::setFluency($fluency);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompetency(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompetency', []);

        return parent::getCompetency();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompetency(?int $competency): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompetency', [$competency]);

        parent::setCompetency($competency);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment(?string $comment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', [$comment]);

        parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecorator(): object
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecorator', []);

        return parent::getDecorator();
    }

}
