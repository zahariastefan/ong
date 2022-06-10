<?php

namespace ContainerA6KXDEs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8d714 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer081aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties139f2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getConnection', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getMetadataFactory', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getExpressionBuilder', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'beginTransaction', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getCache', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getCache();
    }

    public function transactional($func)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'transactional', array('func' => $func), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'wrapInTransaction', array('func' => $func), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'commit', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->commit();
    }

    public function rollback()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'rollback', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getClassMetadata', array('className' => $className), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'createQuery', array('dql' => $dql), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'createNamedQuery', array('name' => $name), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'createQueryBuilder', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'flush', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'clear', array('entityName' => $entityName), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->clear($entityName);
    }

    public function close()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'close', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->close();
    }

    public function persist($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'persist', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'remove', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'refresh', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'detach', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'merge', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getRepository', array('entityName' => $entityName), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'contains', array('entity' => $entity), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getEventManager', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getConfiguration', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'isOpen', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getUnitOfWork', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getProxyFactory', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'initializeObject', array('obj' => $obj), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'getFilters', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'isFiltersStateClean', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'hasFilters', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return $this->valueHolder8d714->hasFilters();
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

        $instance->initializer081aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8d714) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8d714 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8d714->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__get', ['name' => $name], $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        if (isset(self::$publicProperties139f2[$name])) {
            return $this->valueHolder8d714->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d714;

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

        $targetObject = $this->valueHolder8d714;
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
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d714;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8d714;
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
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__isset', array('name' => $name), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d714;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8d714;
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
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__unset', array('name' => $name), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d714;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8d714;
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
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__clone', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        $this->valueHolder8d714 = clone $this->valueHolder8d714;
    }

    public function __sleep()
    {
        $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, '__sleep', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;

        return array('valueHolder8d714');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer081aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer081aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer081aa && ($this->initializer081aa->__invoke($valueHolder8d714, $this, 'initializeProxy', array(), $this->initializer081aa) || 1) && $this->valueHolder8d714 = $valueHolder8d714;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d714;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d714;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
