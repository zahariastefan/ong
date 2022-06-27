<?php

namespace ContainerSQh0fM1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderab509 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbacda = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66207 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getConnection', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getMetadataFactory', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getExpressionBuilder', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'beginTransaction', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getCache', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'transactional', array('func' => $func), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'commit', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->commit();
    }

    public function rollback()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'rollback', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getClassMetadata', array('className' => $className), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'createQuery', array('dql' => $dql), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'createNamedQuery', array('name' => $name), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'createQueryBuilder', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'flush', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'clear', array('entityName' => $entityName), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->clear($entityName);
    }

    public function close()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'close', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->close();
    }

    public function persist($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'persist', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'remove', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'refresh', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'detach', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'merge', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'contains', array('entity' => $entity), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getEventManager', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getConfiguration', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'isOpen', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getUnitOfWork', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getProxyFactory', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'initializeObject', array('obj' => $obj), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'getFilters', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'isFiltersStateClean', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'hasFilters', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return $this->valueHolderab509->hasFilters();
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

        $instance->initializerbacda = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderab509) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderab509 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderab509->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__get', ['name' => $name], $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        if (isset(self::$publicProperties66207[$name])) {
            return $this->valueHolderab509->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab509;

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

        $targetObject = $this->valueHolderab509;
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
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab509;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderab509;
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
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__isset', array('name' => $name), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab509;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderab509;
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
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__unset', array('name' => $name), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderab509;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderab509;
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
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__clone', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        $this->valueHolderab509 = clone $this->valueHolderab509;
    }

    public function __sleep()
    {
        $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, '__sleep', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;

        return array('valueHolderab509');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbacda = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbacda;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbacda && ($this->initializerbacda->__invoke($valueHolderab509, $this, 'initializeProxy', array(), $this->initializerbacda) || 1) && $this->valueHolderab509 = $valueHolderab509;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderab509;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderab509;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
