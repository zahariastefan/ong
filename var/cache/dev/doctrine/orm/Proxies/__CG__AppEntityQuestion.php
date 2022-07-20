<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \App\Entity\Question implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'askedAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'votes', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionTags', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'owner', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'like_nr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'unlike_nr', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'askedAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'votes', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionTags', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'owner', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'like_nr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'unlike_nr', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
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
    public function __setInitializer(\Closure $initializer = null): void
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
    public function __setCloner(\Closure $cloner = null): void
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
    public function getId(): ?int
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
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion(string $question): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', [$question]);

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getAskedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAskedAt', []);

        return parent::getAskedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setAskedAt(?\DateTimeInterface $askedAt): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAskedAt', [$askedAt]);

        return parent::setAskedAt($askedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getVotes(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVotes', []);

        return parent::getVotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getVotesString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVotesString', []);

        return parent::getVotesString();
    }

    /**
     * {@inheritDoc}
     */
    public function setVotes(int $votes): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVotes', [$votes]);

        return parent::setVotes($votes);
    }

    /**
     * {@inheritDoc}
     */
    public function upVote(): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upVote', []);

        return parent::upVote();
    }

    /**
     * {@inheritDoc}
     */
    public function downVote(): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'downVote', []);

        return parent::downVote();
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswers', []);

        return parent::getAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovedAnswers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovedAnswers', []);

        return parent::getApprovedAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function addAnswer(\App\Entity\Answer $answer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnswer', [$answer]);

        return parent::addAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnswer(\App\Entity\Answer $answer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnswer', [$answer]);

        return parent::removeAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionTags(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionTags', []);

        return parent::getQuestionTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestionTag(\App\Entity\QuestionTag $questionTag): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuestionTag', [$questionTag]);

        return parent::addQuestionTag($questionTag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestionTag(\App\Entity\QuestionTag $questionTag): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuestionTag', [$questionTag]);

        return parent::removeQuestionTag($questionTag);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(?\App\Entity\User $owner): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikeNr(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikeNr', []);

        return parent::getLikeNr();
    }

    /**
     * {@inheritDoc}
     */
    public function setLikeNr(?int $like_nr): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLikeNr', [$like_nr]);

        return parent::setLikeNr($like_nr);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnlikeNr(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnlikeNr', []);

        return parent::getUnlikeNr();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnlikeNr(?int $unlike_nr): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnlikeNr', [$unlike_nr]);

        return parent::setUnlikeNr($unlike_nr);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
