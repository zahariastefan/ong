<?php

namespace ContainerPNFSBmx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera0ebb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7527 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties14b53 = [
        
    ];

    public function persist($user) : void
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'persist', array('user' => $user), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        $this->valueHoldera0ebb->persist($user);
return;
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);

        $instance->initializerf7527 = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHoldera0ebb) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHoldera0ebb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHoldera0ebb->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__get', ['name' => $name], $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        if (isset(self::$publicProperties14b53[$name])) {
            return $this->valueHoldera0ebb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0ebb;

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

        $targetObject = $this->valueHoldera0ebb;
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
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0ebb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera0ebb;
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
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__isset', array('name' => $name), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0ebb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera0ebb;
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
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__unset', array('name' => $name), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0ebb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera0ebb;
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
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__clone', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        $this->valueHoldera0ebb = clone $this->valueHoldera0ebb;
    }

    public function __sleep()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__sleep', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return array('valueHoldera0ebb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7527 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7527;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'initializeProxy', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0ebb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0ebb;
    }
}

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
