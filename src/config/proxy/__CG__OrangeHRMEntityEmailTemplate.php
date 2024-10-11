<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EmailTemplate extends \OrangeHRM\Entity\EmailTemplate implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'email', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'locale', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'performerRole', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'recipientRole', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'subject', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'body'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'email', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'locale', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'performerRole', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'recipientRole', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'subject', '' . "\0" . 'OrangeHRM\\Entity\\EmailTemplate' . "\0" . 'body'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EmailTemplate $proxy) {
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
    public function getEmail(): \OrangeHRM\Entity\Email
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(\OrangeHRM\Entity\Email $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale(?string $locale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', [$locale]);

        parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerformerRole(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerformerRole', []);

        return parent::getPerformerRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerformerRole(?string $performerRole): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerformerRole', [$performerRole]);

        parent::setPerformerRole($performerRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipientRole(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipientRole', []);

        return parent::getRecipientRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipientRole(string $recipientRole): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipientRole', [$recipientRole]);

        parent::setRecipientRole($recipientRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', []);

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubject(string $subject): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', [$subject]);

        parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody(string $body): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        parent::setBody($body);
    }

}
