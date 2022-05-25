<?php

namespace ContainerZyOIRHL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34b2c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd5669 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties893fc = [
        
    ];

    public function getConnection()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getConnection', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getMetadataFactory', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getExpressionBuilder', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'beginTransaction', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getCache', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'transactional', array('func' => $func), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'commit', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->commit();
    }

    public function rollback()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'rollback', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getClassMetadata', array('className' => $className), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'createQuery', array('dql' => $dql), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'createNamedQuery', array('name' => $name), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'createQueryBuilder', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'flush', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'clear', array('entityName' => $entityName), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->clear($entityName);
    }

    public function close()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'close', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->close();
    }

    public function persist($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'persist', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'remove', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'refresh', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'detach', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'merge', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'contains', array('entity' => $entity), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getEventManager', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getConfiguration', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'isOpen', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getUnitOfWork', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getProxyFactory', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'initializeObject', array('obj' => $obj), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'getFilters', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'isFiltersStateClean', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'hasFilters', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return $this->valueHolder34b2c->hasFilters();
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

        $instance->initializerd5669 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34b2c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34b2c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34b2c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__get', ['name' => $name], $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        if (isset(self::$publicProperties893fc[$name])) {
            return $this->valueHolder34b2c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34b2c;

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

        $targetObject = $this->valueHolder34b2c;
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
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34b2c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34b2c;
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
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__isset', array('name' => $name), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34b2c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34b2c;
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
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__unset', array('name' => $name), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34b2c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34b2c;
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
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__clone', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        $this->valueHolder34b2c = clone $this->valueHolder34b2c;
    }

    public function __sleep()
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__sleep', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        return array('valueHolder34b2c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd5669 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd5669;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'initializeProxy', array(), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34b2c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34b2c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
