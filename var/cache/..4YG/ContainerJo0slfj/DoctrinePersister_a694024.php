<?php

namespace ContainerJo0slfj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf4069 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1dbab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8a57 = [
        
    ];

    public function persist($user) : void
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'persist', array('user' => $user), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        $this->valueHolderf4069->persist($user);
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

        $instance->initializer1dbab = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolderf4069) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolderf4069 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolderf4069->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__get', ['name' => $name], $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        if (isset(self::$publicPropertiesb8a57[$name])) {
            return $this->valueHolderf4069->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4069;

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

        $targetObject = $this->valueHolderf4069;
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
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4069;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf4069;
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
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__isset', array('name' => $name), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4069;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf4069;
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
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__unset', array('name' => $name), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4069;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf4069;
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
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__clone', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        $this->valueHolderf4069 = clone $this->valueHolderf4069;
    }

    public function __sleep()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__sleep', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return array('valueHolderf4069');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1dbab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1dbab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'initializeProxy', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4069;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf4069;
    }
}

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
