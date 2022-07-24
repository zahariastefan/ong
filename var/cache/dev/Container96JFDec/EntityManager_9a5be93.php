<?php

namespace Container96JFDec;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getConnection', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getMetadataFactory', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getExpressionBuilder', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'beginTransaction', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getCache', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'transactional', array('func' => $func), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'commit', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->commit();
    }

    public function rollback()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'rollback', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'createQuery', array('dql' => $dql), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'createQueryBuilder', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'flush', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'clear', array('entityName' => $entityName), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'close', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->close();
    }

    public function persist($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'persist', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'remove', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'refresh', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'detach', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'merge', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'contains', array('entity' => $entity), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getEventManager', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getConfiguration', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'isOpen', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getUnitOfWork', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getProxyFactory', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'getFilters', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'isFiltersStateClean', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, 'hasFilters', array(), $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        return $this->valueHoldera0ebb->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf7527 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera0ebb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera0ebb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera0ebb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf7527 && ($this->initializerf7527->__invoke($valueHoldera0ebb, $this, '__get', ['name' => $name], $this->initializerf7527) || 1) && $this->valueHoldera0ebb = $valueHoldera0ebb;

        if (isset(self::$publicProperties14b53[$name])) {
            return $this->valueHoldera0ebb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
