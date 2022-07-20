<?php

namespace ContainerFIeJFdc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf49c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5f75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3adf6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getConnection', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getMetadataFactory', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getExpressionBuilder', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'beginTransaction', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getCache', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'transactional', array('func' => $func), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'commit', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->commit();
    }

    public function rollback()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'rollback', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'createQuery', array('dql' => $dql), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'createQueryBuilder', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'flush', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'clear', array('entityName' => $entityName), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'close', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->close();
    }

    public function persist($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'persist', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'remove', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'refresh', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'detach', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'merge', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'contains', array('entity' => $entity), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getEventManager', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getConfiguration', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'isOpen', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getUnitOfWork', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getProxyFactory', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'getFilters', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'isFiltersStateClean', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'hasFilters', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return $this->valueHolderbf49c->hasFilters();
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

        $instance->initializerb5f75 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbf49c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbf49c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbf49c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__get', ['name' => $name], $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        if (isset(self::$publicProperties3adf6[$name])) {
            return $this->valueHolderbf49c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

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

        $targetObject = $this->valueHolderbf49c;
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
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf49c;
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
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__isset', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf49c;
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
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__unset', array('name' => $name), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf49c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf49c;
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
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__clone', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        $this->valueHolderbf49c = clone $this->valueHolderbf49c;
    }

    public function __sleep()
    {
        $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, '__sleep', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;

        return array('valueHolderbf49c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5f75 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5f75;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5f75 && ($this->initializerb5f75->__invoke($valueHolderbf49c, $this, 'initializeProxy', array(), $this->initializerb5f75) || 1) && $this->valueHolderbf49c = $valueHolderbf49c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf49c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf49c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
