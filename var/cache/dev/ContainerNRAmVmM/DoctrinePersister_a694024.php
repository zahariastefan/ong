<?php

namespace ContainerNRAmVmM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersister.php';

class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolder441ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbaf3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb92c4 = [
        
    ];

    public function persist($user) : void
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'persist', array('user' => $user), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        $this->valueHolder441ea->persist($user);
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

        $instance->initializerdbaf3 = $initializer;

        return $instance;
    }

    public function __construct($om)
    {
        static $reflection;

        if (! $this->valueHolder441ea) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHolder441ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);

        }

        $this->valueHolder441ea->__construct($om);
    }

    public function & __get($name)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__get', ['name' => $name], $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        if (isset(self::$publicPropertiesb92c4[$name])) {
            return $this->valueHolder441ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder441ea;

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

        $targetObject = $this->valueHolder441ea;
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
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder441ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder441ea;
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
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__isset', array('name' => $name), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder441ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder441ea;
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
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__unset', array('name' => $name), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder441ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder441ea;
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
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__clone', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        $this->valueHolder441ea = clone $this->valueHolder441ea;
    }

    public function __sleep()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__sleep', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return array('valueHolder441ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbaf3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbaf3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'initializeProxy', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder441ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder441ea;
    }
}

if (!\class_exists('DoctrinePersister_a694024', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersister_a694024', 'DoctrinePersister_a694024', false);
}
