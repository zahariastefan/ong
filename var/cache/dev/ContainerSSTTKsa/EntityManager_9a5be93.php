<?php

namespace ContainerSSTTKsa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30209 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6b932 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74b69 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getConnection', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getMetadataFactory', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getExpressionBuilder', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'beginTransaction', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getCache', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'transactional', array('func' => $func), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'commit', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->commit();
    }

    public function rollback()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'rollback', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getClassMetadata', array('className' => $className), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'createQuery', array('dql' => $dql), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'createNamedQuery', array('name' => $name), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'createQueryBuilder', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'flush', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'clear', array('entityName' => $entityName), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->clear($entityName);
    }

    public function close()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'close', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->close();
    }

    public function persist($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'persist', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'remove', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'refresh', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'detach', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'merge', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'contains', array('entity' => $entity), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getEventManager', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getConfiguration', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'isOpen', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getUnitOfWork', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getProxyFactory', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'initializeObject', array('obj' => $obj), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'getFilters', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'isFiltersStateClean', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'hasFilters', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return $this->valueHolder30209->hasFilters();
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

        $instance->initializer6b932 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder30209) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30209 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30209->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__get', ['name' => $name], $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        if (isset(self::$publicProperties74b69[$name])) {
            return $this->valueHolder30209->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30209;

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

        $targetObject = $this->valueHolder30209;
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
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30209;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30209;
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
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__isset', array('name' => $name), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30209;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30209;
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
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__unset', array('name' => $name), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30209;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30209;
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
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__clone', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        $this->valueHolder30209 = clone $this->valueHolder30209;
    }

    public function __sleep()
    {
        $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, '__sleep', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;

        return array('valueHolder30209');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b932 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b932;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6b932 && ($this->initializer6b932->__invoke($valueHolder30209, $this, 'initializeProxy', array(), $this->initializer6b932) || 1) && $this->valueHolder30209 = $valueHolder30209;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30209;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30209;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
