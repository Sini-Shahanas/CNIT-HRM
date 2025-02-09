<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Candidate extends \OrangeHRM\Entity\Candidate implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'firstName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'middleName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'lastName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'email', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'contactNumber', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'comment', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'modeOfApplication', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'dateOfApplication', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'cvFileId', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'cvTextVersion', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'keywords', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'addedPerson', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'consentToKeepData', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateVacancy', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateAttachment', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateHistory', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'firstName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'middleName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'lastName', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'email', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'contactNumber', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'status', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'comment', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'modeOfApplication', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'dateOfApplication', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'cvFileId', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'cvTextVersion', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'keywords', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'addedPerson', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'consentToKeepData', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateVacancy', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateAttachment', '' . "\0" . 'OrangeHRM\\Entity\\Candidate' . "\0" . 'candidateHistory', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Candidate $proxy) {
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
    public function getFirstName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiddleName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiddleName', []);

        return parent::getMiddleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setMiddleName(?string $middleName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiddleName', [$middleName]);

        parent::setMiddleName($middleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactNumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactNumber', []);

        return parent::getContactNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactNumber(?string $contactNumber): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactNumber', [$contactNumber]);

        parent::setContactNumber($contactNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $status): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        parent::setStatus($status);
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
    public function getModeOfApplication(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModeOfApplication', []);

        return parent::getModeOfApplication();
    }

    /**
     * {@inheritDoc}
     */
    public function setModeOfApplication(int $modeOfApplication): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModeOfApplication', [$modeOfApplication]);

        parent::setModeOfApplication($modeOfApplication);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfApplication(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfApplication', []);

        return parent::getDateOfApplication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfApplication(\DateTime $dateOfApplication): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfApplication', [$dateOfApplication]);

        parent::setDateOfApplication($dateOfApplication);
    }

    /**
     * {@inheritDoc}
     */
    public function getCvFileId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCvFileId', []);

        return parent::getCvFileId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCvFileId(?int $cvFileId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCvFileId', [$cvFileId]);

        parent::setCvFileId($cvFileId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCvTextVersion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCvTextVersion', []);

        return parent::getCvTextVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCvTextVersion(?string $cvTextVersion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCvTextVersion', [$cvTextVersion]);

        parent::setCvTextVersion($cvTextVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', []);

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeywords(?string $keywords): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', [$keywords]);

        parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddedPerson(): ?\OrangeHRM\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddedPerson', []);

        return parent::getAddedPerson();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddedPerson(?\OrangeHRM\Entity\Employee $addedPerson): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddedPerson', [$addedPerson]);

        parent::setAddedPerson($addedPerson);
    }

    /**
     * {@inheritDoc}
     */
    public function isConsentToKeepData(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConsentToKeepData', []);

        return parent::isConsentToKeepData();
    }

    /**
     * {@inheritDoc}
     */
    public function setConsentToKeepData(bool $consentToKeepData): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConsentToKeepData', [$consentToKeepData]);

        parent::setConsentToKeepData($consentToKeepData);
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidateVacancy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidateVacancy', []);

        return parent::getCandidateVacancy();
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidateAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidateAttachment', []);

        return parent::getCandidateAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidateHistory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidateHistory', []);

        return parent::getCandidateHistory();
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
