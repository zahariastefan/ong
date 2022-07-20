<?php

namespace ContainerRq5gDf8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getConnection', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getMetadataFactory', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getExpressionBuilder', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'beginTransaction', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getCache', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'transactional', array('func' => $func), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'commit', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->commit();
    }

    public function rollback()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'rollback', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'createQuery', array('dql' => $dql), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'createQueryBuilder', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'flush', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'clear', array('entityName' => $entityName), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'close', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->close();
    }

    public function persist($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'persist', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'remove', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'refresh', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'detach', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'merge', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'contains', array('entity' => $entity), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getEventManager', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getConfiguration', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'isOpen', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getUnitOfWork', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getProxyFactory', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'getFilters', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'isFiltersStateClean', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, 'hasFilters', array(), $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        return $this->valueHolder441ea->hasFilters();
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

        $instance->initializerdbaf3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder441ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder441ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder441ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdbaf3 && ($this->initializerdbaf3->__invoke($valueHolder441ea, $this, '__get', ['name' => $name], $this->initializerdbaf3) || 1) && $this->valueHolder441ea = $valueHolder441ea;

        if (isset(self::$publicPropertiesb92c4[$name])) {
            return $this->valueHolder441ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
