<?php

namespace ContainerSvxdlEB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderabe01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer34c31 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7a8b7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getConnection', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getMetadataFactory', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getExpressionBuilder', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'beginTransaction', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getCache', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getCache();
    }

    public function transactional($func)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'transactional', array('func' => $func), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'wrapInTransaction', array('func' => $func), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'commit', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->commit();
    }

    public function rollback()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'rollback', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getClassMetadata', array('className' => $className), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'createQuery', array('dql' => $dql), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'createNamedQuery', array('name' => $name), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'createQueryBuilder', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'flush', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'clear', array('entityName' => $entityName), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->clear($entityName);
    }

    public function close()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'close', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->close();
    }

    public function persist($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'persist', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'remove', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'refresh', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'detach', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'merge', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getRepository', array('entityName' => $entityName), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'contains', array('entity' => $entity), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getEventManager', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getConfiguration', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'isOpen', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getUnitOfWork', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getProxyFactory', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'initializeObject', array('obj' => $obj), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'getFilters', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'isFiltersStateClean', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'hasFilters', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return $this->valueHolderabe01->hasFilters();
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

        $instance->initializer34c31 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderabe01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderabe01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderabe01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__get', ['name' => $name], $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        if (isset(self::$publicProperties7a8b7[$name])) {
            return $this->valueHolderabe01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe01;

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

        $targetObject = $this->valueHolderabe01;
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
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderabe01;
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
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__isset', array('name' => $name), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderabe01;
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
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__unset', array('name' => $name), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabe01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderabe01;
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
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__clone', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        $this->valueHolderabe01 = clone $this->valueHolderabe01;
    }

    public function __sleep()
    {
        $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, '__sleep', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;

        return array('valueHolderabe01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer34c31 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer34c31;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer34c31 && ($this->initializer34c31->__invoke($valueHolderabe01, $this, 'initializeProxy', array(), $this->initializer34c31) || 1) && $this->valueHolderabe01 = $valueHolderabe01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderabe01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderabe01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
