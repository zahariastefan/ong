<?php

namespace ContainerMKd0uQ9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'TwoFactorProviderHandler.php';

class TwoFactorProviderHandler_3ecff6c extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler|null wrapped object, if the proxy is initialized
     */
    private $valueHolderccd6a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3272 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc8ca7 = [
        
    ];

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($instance);

        $instance->initializerc3272 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry $providerRegistry, \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactoryInterface $twoFactorTokenFactory)
    {
        static $reflection;

        if (! $this->valueHolderccd6a) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');
            $this->valueHolderccd6a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);

        }

        $this->valueHolderccd6a->__construct($providerRegistry, $twoFactorTokenFactory);
    }

    public function & __get($name)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__get', ['name' => $name], $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        if (isset(self::$publicPropertiesc8ca7[$name])) {
            return $this->valueHolderccd6a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccd6a;

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

        $targetObject = $this->valueHolderccd6a;
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
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccd6a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderccd6a;
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
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__isset', array('name' => $name), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccd6a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderccd6a;
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
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__unset', array('name' => $name), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccd6a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderccd6a;
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
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__clone', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        $this->valueHolderccd6a = clone $this->valueHolderccd6a;
    }

    public function __sleep()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__sleep', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return array('valueHolderccd6a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler $instance) {
            unset($instance->providerRegistry, $instance->twoFactorTokenFactory);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TwoFactorProviderHandler')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3272 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3272;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'initializeProxy', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderccd6a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderccd6a;
    }
}

if (!\class_exists('TwoFactorProviderHandler_3ecff6c', false)) {
    \class_alias(__NAMESPACE__.'\\TwoFactorProviderHandler_3ecff6c', 'TwoFactorProviderHandler_3ecff6c', false);
}