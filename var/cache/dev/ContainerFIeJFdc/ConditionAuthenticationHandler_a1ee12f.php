<?php

namespace ContainerFIeJFdc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'ConditionAuthenticationHandler.php';

class ConditionAuthenticationHandler_a1ee12f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf49c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5f75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3adf6 = [
        
    ];

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->beginTwoFactorAuthentication($context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($instance);

        $instance->initializerb5f75 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionInterface $condition)
    {
        static $reflection;

        if (! $this->valueHolderbf49c) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');
            $this->valueHolderbf49c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);

        }

        $this->valueHolderbf49c->__construct($authenticationHandler, $condition);
    }

    public function & __get($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__get', ['name' => $name], $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        if (isset(self::$publicProperties3adf6[$name])) {
            return $this->valueHolderbf49c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf49c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf49c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__isset', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf49c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__unset', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf49c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__clone', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $this->valueHolderbf49c = clone $this->valueHolderbf49c;
    }

    public function __sleep()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__sleep', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return array('valueHolderbf49c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5f75 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5f75;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'initializeProxy', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf49c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf49c;
    }
}

if (!\class_exists('ConditionAuthenticationHandler_a1ee12f', false)) {
    \class_alias(__NAMESPACE__.'\\ConditionAuthenticationHandler_a1ee12f', 'ConditionAuthenticationHandler_a1ee12f', false);
}
