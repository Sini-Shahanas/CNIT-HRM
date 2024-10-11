<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class I18NLangString extends \OrangeHRM\Entity\I18NLangString implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'unitId', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'group', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'value', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'version', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'translations'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'unitId', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'group', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'value', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'version', '' . "\0" . 'OrangeHRM\\Entity\\I18NLangString' . "\0" . 'translations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (I18NLangString $proxy) {
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
    public function getId(): int
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
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitId(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitId', []);

        return parent::getUnitId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitId(string $unitId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitId', [$unitId]);

        parent::setUnitId($unitId);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup(): ?\OrangeHRM\Entity\I18NGroup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup(?\OrangeHRM\Entity\I18NGroup $group): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', []);

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(string $value): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', [$value]);

        parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(?string $note): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion(?string $version): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        parent::setVersion($version);
    }

}
