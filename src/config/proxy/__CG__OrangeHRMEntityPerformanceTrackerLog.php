<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PerformanceTrackerLog extends \OrangeHRM\Entity\PerformanceTrackerLog implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'log', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'comment', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'achievement', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'addedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'modifiedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'performanceTracker', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'user', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'log', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'comment', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'achievement', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'addedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'modifiedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'performanceTracker', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceTrackerLog' . "\0" . 'user', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PerformanceTrackerLog $proxy) {
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
    public function getLog(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', []);

        return parent::getLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setLog(?string $log): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLog', [$log]);

        parent::setLog($log);
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
    public function getStatus(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?int $status): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getAchievement(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAchievement', []);

        return parent::getAchievement();
    }

    /**
     * {@inheritDoc}
     */
    public function setAchievement(?string $achievement): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAchievement', [$achievement]);

        parent::setAchievement($achievement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddedDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddedDate', []);

        return parent::getAddedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddedDate(?\DateTime $addedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddedDate', [$addedDate]);

        parent::setAddedDate($addedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedDate', []);

        return parent::getModifiedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedDate(?\DateTime $modifiedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedDate', [$modifiedDate]);

        parent::setModifiedDate($modifiedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerformanceTracker(): ?\OrangeHRM\Entity\PerformanceTracker
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerformanceTracker', []);

        return parent::getPerformanceTracker();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerformanceTracker(?\OrangeHRM\Entity\PerformanceTracker $performanceTracker): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerformanceTracker', [$performanceTracker]);

        parent::setPerformanceTracker($performanceTracker);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployee(): ?\OrangeHRM\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployee', []);

        return parent::getEmployee();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployee(?\OrangeHRM\Entity\Employee $employee): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployee', [$employee]);

        parent::setEmployee($employee);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\OrangeHRM\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\OrangeHRM\Entity\User $user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
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
