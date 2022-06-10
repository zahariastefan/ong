<?php

namespace Container4JpIxLU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder26af9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeredcb9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3ee59 = [
        
    ];

    public function getConnection()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getConnection', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getMetadataFactory', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getExpressionBuilder', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'beginTransaction', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getCache', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getCache();
    }

    public function transactional($func)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'transactional', array('func' => $func), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'wrapInTransaction', array('func' => $func), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'commit', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->commit();
    }

    public function rollback()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'rollback', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getClassMetadata', array('className' => $className), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'createQuery', array('dql' => $dql), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'createNamedQuery', array('name' => $name), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'createQueryBuilder', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'flush', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'clear', array('entityName' => $entityName), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->clear($entityName);
    }

    public function close()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'close', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->close();
    }

    public function persist($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'persist', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'remove', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'refresh', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'detach', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'merge', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getRepository', array('entityName' => $entityName), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'contains', array('entity' => $entity), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getEventManager', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getConfiguration', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'isOpen', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getUnitOfWork', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getProxyFactory', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'initializeObject', array('obj' => $obj), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'getFilters', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'isFiltersStateClean', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'hasFilters', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return $this->valueHolder26af9->hasFilters();
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

        $instance->initializeredcb9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder26af9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder26af9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder26af9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__get', ['name' => $name], $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        if (isset(self::$publicProperties3ee59[$name])) {
            return $this->valueHolder26af9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26af9;

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

        $targetObject = $this->valueHolder26af9;
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
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26af9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder26af9;
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
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__isset', array('name' => $name), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26af9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder26af9;
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
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__unset', array('name' => $name), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder26af9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder26af9;
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
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__clone', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        $this->valueHolder26af9 = clone $this->valueHolder26af9;
    }

    public function __sleep()
    {
        $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, '__sleep', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;

        return array('valueHolder26af9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeredcb9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeredcb9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeredcb9 && ($this->initializeredcb9->__invoke($valueHolder26af9, $this, 'initializeProxy', array(), $this->initializeredcb9) || 1) && $this->valueHolder26af9 = $valueHolder26af9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder26af9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder26af9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
