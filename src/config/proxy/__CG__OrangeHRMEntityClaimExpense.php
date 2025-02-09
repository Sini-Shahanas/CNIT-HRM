<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClaimExpense extends \OrangeHRM\Entity\ClaimExpense implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'expenseType', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'date', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'amount', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'claimRequest', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'isDeleted', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'expenseType', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'date', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'amount', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'claimRequest', '' . "\0" . 'OrangeHRM\\Entity\\ClaimExpense' . "\0" . 'isDeleted', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClaimExpense $proxy) {
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
    public function getExpenseType(): \OrangeHRM\Entity\ExpenseType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpenseType', []);

        return parent::getExpenseType();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpenseType(\OrangeHRM\Entity\ExpenseType $expenseType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpenseType', [$expenseType]);

        parent::setExpenseType($expenseType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTime $date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', []);

        return parent::getAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmount(float $amount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmount', [$amount]);

        parent::setAmount($amount);
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
    public function getClaimRequest(): \OrangeHRM\Entity\ClaimRequest
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClaimRequest', []);

        return parent::getClaimRequest();
    }

    /**
     * {@inheritDoc}
     */
    public function setClaimRequest(\OrangeHRM\Entity\ClaimRequest $claimRequest): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClaimRequest', [$claimRequest]);

        parent::setClaimRequest($claimRequest);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDeleted(bool $isDeleted): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDeleted', [$isDeleted]);

        parent::setIsDeleted($isDeleted);
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
