<?php

namespace Container0nx1MMT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0454b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd7e1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2be5c = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getConnection', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getMetadataFactory', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getExpressionBuilder', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'beginTransaction', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getCache', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'transactional', array('func' => $func), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'commit', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->commit();
    }

    public function rollback()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'rollback', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'createQuery', array('dql' => $dql), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'createQueryBuilder', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'flush', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'clear', array('entityName' => $entityName), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'close', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->close();
    }

    public function persist($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'persist', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'remove', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'refresh', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'detach', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'merge', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'contains', array('entity' => $entity), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getEventManager', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getConfiguration', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'isOpen', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getUnitOfWork', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getProxyFactory', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'getFilters', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'isFiltersStateClean', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'hasFilters', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return $this->valueHolder0454b->hasFilters();
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

        $instance->initializerfd7e1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0454b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0454b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0454b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__get', ['name' => $name], $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        if (isset(self::$publicProperties2be5c[$name])) {
            return $this->valueHolder0454b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0454b;

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

        $targetObject = $this->valueHolder0454b;
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
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0454b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0454b;
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
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__isset', array('name' => $name), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0454b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0454b;
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
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__unset', array('name' => $name), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0454b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0454b;
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
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__clone', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        $this->valueHolder0454b = clone $this->valueHolder0454b;
    }

    public function __sleep()
    {
        $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, '__sleep', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;

        return array('valueHolder0454b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd7e1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd7e1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd7e1 && ($this->initializerfd7e1->__invoke($valueHolder0454b, $this, 'initializeProxy', array(), $this->initializerfd7e1) || 1) && $this->valueHolder0454b = $valueHolder0454b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0454b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0454b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
