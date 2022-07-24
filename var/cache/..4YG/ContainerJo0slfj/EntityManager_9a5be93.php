<?php

namespace ContainerJo0slfj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getConnection', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getMetadataFactory', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getExpressionBuilder', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'beginTransaction', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getCache', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'transactional', array('func' => $func), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'commit', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->commit();
    }

    public function rollback()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'rollback', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getClassMetadata', array('className' => $className), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'createQuery', array('dql' => $dql), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'createNamedQuery', array('name' => $name), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'createQueryBuilder', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'flush', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'clear', array('entityName' => $entityName), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->clear($entityName);
    }

    public function close()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'close', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->close();
    }

    public function persist($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'persist', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'remove', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'refresh', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'detach', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'merge', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'contains', array('entity' => $entity), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getEventManager', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getConfiguration', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'isOpen', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getUnitOfWork', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getProxyFactory', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'initializeObject', array('obj' => $obj), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'getFilters', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'isFiltersStateClean', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, 'hasFilters', array(), $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        return $this->valueHolderf4069->hasFilters();
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

        $instance->initializer1dbab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf4069) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4069 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf4069->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1dbab && ($this->initializer1dbab->__invoke($valueHolderf4069, $this, '__get', ['name' => $name], $this->initializer1dbab) || 1) && $this->valueHolderf4069 = $valueHolderf4069;

        if (isset(self::$publicPropertiesb8a57[$name])) {
            return $this->valueHolderf4069->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
