<?php

namespace ContainerIcqpIXf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5894f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraa591 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87eec = [
        
    ];

    public function getConnection()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getConnection', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getMetadataFactory', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getExpressionBuilder', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'beginTransaction', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getCache', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'transactional', array('func' => $func), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'commit', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->commit();
    }

    public function rollback()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'rollback', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'createQuery', array('dql' => $dql), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'createQueryBuilder', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'flush', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'clear', array('entityName' => $entityName), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->clear($entityName);
    }

    public function close()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'close', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->close();
    }

    public function persist($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'persist', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'remove', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'refresh', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'detach', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'merge', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'contains', array('entity' => $entity), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getEventManager', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getConfiguration', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'isOpen', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getUnitOfWork', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getProxyFactory', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'getFilters', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'isFiltersStateClean', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'hasFilters', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return $this->valueHolder5894f->hasFilters();
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

        $instance->initializeraa591 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5894f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5894f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5894f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__get', ['name' => $name], $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        if (isset(self::$publicProperties87eec[$name])) {
            return $this->valueHolder5894f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5894f;

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

        $targetObject = $this->valueHolder5894f;
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
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5894f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5894f;
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
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__isset', array('name' => $name), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5894f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5894f;
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
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__unset', array('name' => $name), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5894f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5894f;
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
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__clone', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        $this->valueHolder5894f = clone $this->valueHolder5894f;
    }

    public function __sleep()
    {
        $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, '__sleep', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;

        return array('valueHolder5894f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa591 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa591;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraa591 && ($this->initializeraa591->__invoke($valueHolder5894f, $this, 'initializeProxy', array(), $this->initializeraa591) || 1) && $this->valueHolder5894f = $valueHolder5894f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5894f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5894f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
