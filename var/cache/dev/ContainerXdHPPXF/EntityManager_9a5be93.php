<?php

namespace ContainerXdHPPXF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getConnection', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getMetadataFactory', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getExpressionBuilder', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'beginTransaction', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getCache', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'transactional', array('func' => $func), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'commit', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->commit();
    }

    public function rollback()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'rollback', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'createQuery', array('dql' => $dql), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'createQueryBuilder', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'flush', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'clear', array('entityName' => $entityName), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'close', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->close();
    }

    public function persist($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'persist', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'remove', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'refresh', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'detach', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'merge', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'contains', array('entity' => $entity), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getEventManager', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getConfiguration', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'isOpen', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getUnitOfWork', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getProxyFactory', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'getFilters', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'isFiltersStateClean', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, 'hasFilters', array(), $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        return $this->valueHolderccd6a->hasFilters();
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

        $instance->initializerc3272 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderccd6a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderccd6a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderccd6a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3272 && ($this->initializerc3272->__invoke($valueHolderccd6a, $this, '__get', ['name' => $name], $this->initializerc3272) || 1) && $this->valueHolderccd6a = $valueHolderccd6a;

        if (isset(self::$publicPropertiesc8ca7[$name])) {
            return $this->valueHolderccd6a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
