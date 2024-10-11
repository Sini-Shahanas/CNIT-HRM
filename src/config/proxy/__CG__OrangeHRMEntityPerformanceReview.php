<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PerformanceReview extends \OrangeHRM\Entity\PerformanceReview implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'statusId', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewPeriodStart', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewPeriodEnd', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'dueDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'completedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'activatedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'finalComment', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'finalRate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewerRatings', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewers', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'jobTitle', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'subunit', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'employee', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'statusId', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewPeriodStart', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewPeriodEnd', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'dueDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'completedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'activatedDate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'finalComment', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'finalRate', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewerRatings', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'reviewers', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'jobTitle', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'subunit', '' . "\0" . 'OrangeHRM\\Entity\\PerformanceReview' . "\0" . 'employee', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PerformanceReview $proxy) {
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
    public function getStatusId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusId', []);

        return parent::getStatusId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusId(?int $statusId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusId', [$statusId]);

        parent::setStatusId($statusId);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewPeriodStart(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewPeriodStart', []);

        return parent::getReviewPeriodStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewPeriodStart(?\DateTime $reviewPeriodStart): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewPeriodStart', [$reviewPeriodStart]);

        parent::setReviewPeriodStart($reviewPeriodStart);
    }

    /**
     * {@inheritDoc}
     */
    public function getReviewPeriodEnd(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewPeriodEnd', []);

        return parent::getReviewPeriodEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewPeriodEnd(?\DateTime $reviewPeriodEnd): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewPeriodEnd', [$reviewPeriodEnd]);

        parent::setReviewPeriodEnd($reviewPeriodEnd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDueDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDueDate', []);

        return parent::getDueDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDueDate(?\DateTime $dueDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDueDate', [$dueDate]);

        parent::setDueDate($dueDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompletedDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompletedDate', []);

        return parent::getCompletedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompletedDate(?\DateTime $completedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompletedDate', [$completedDate]);

        parent::setCompletedDate($completedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivatedDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivatedDate', []);

        return parent::getActivatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivatedDate(?\DateTime $activatedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivatedDate', [$activatedDate]);

        parent::setActivatedDate($activatedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinalComment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinalComment', []);

        return parent::getFinalComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinalComment(?string $finalComment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinalComment', [$finalComment]);

        parent::setFinalComment($finalComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinalRate(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinalRate', []);

        return parent::getFinalRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinalRate(?float $finalRate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinalRate', [$finalRate]);

        parent::setFinalRate($finalRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobTitle(): ?\OrangeHRM\Entity\JobTitle
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobTitle', []);

        return parent::getJobTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setJobTitle(?\OrangeHRM\Entity\JobTitle $jobTitle): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJobTitle', [$jobTitle]);

        parent::setJobTitle($jobTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubunit(): ?\OrangeHRM\Entity\Subunit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubunit', []);

        return parent::getSubunit();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubunit(?\OrangeHRM\Entity\Subunit $subunit): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubunit', [$subunit]);

        parent::setSubunit($subunit);
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
    public function getReviewers(): iterable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReviewers', []);

        return parent::getReviewers();
    }

    /**
     * {@inheritDoc}
     */
    public function setReviewers(iterable $reviewers): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReviewers', [$reviewers]);

        parent::setReviewers($reviewers);
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
