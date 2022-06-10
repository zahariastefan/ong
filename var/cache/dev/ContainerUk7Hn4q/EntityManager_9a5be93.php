<?php

namespace ContainerUk7Hn4q;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85a4f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2120 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9409c = [
        
    ];

    public function getConnection()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getConnection', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getMetadataFactory', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getExpressionBuilder', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'beginTransaction', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getCache', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'transactional', array('func' => $func), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'wrapInTransaction', array('func' => $func), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'commit', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->commit();
    }

    public function rollback()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'rollback', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getClassMetadata', array('className' => $className), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'createQuery', array('dql' => $dql), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'createNamedQuery', array('name' => $name), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'createQueryBuilder', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'flush', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'clear', array('entityName' => $entityName), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->clear($entityName);
    }

    public function close()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'close', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->close();
    }

    public function persist($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'persist', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'remove', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'refresh', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'detach', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'merge', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'contains', array('entity' => $entity), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getEventManager', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getConfiguration', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'isOpen', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getUnitOfWork', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getProxyFactory', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'initializeObject', array('obj' => $obj), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'getFilters', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'isFiltersStateClean', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'hasFilters', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return $this->valueHolder85a4f->hasFilters();
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

        $instance->initializera2120 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder85a4f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85a4f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85a4f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__get', ['name' => $name], $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        if (isset(self::$publicProperties9409c[$name])) {
            return $this->valueHolder85a4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85a4f;

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

        $targetObject = $this->valueHolder85a4f;
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
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85a4f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85a4f;
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
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__isset', array('name' => $name), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85a4f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85a4f;
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
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__unset', array('name' => $name), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85a4f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85a4f;
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
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__clone', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        $this->valueHolder85a4f = clone $this->valueHolder85a4f;
    }

    public function __sleep()
    {
        $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, '__sleep', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;

        return array('valueHolder85a4f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2120 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2120;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2120 && ($this->initializera2120->__invoke($valueHolder85a4f, $this, 'initializeProxy', array(), $this->initializera2120) || 1) && $this->valueHolder85a4f = $valueHolder85a4f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85a4f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85a4f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
