<?php

namespace ContainerKfaTC7z;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere2cee = null;
    private $initializerfaf56 = null;
    private static $publicProperties3cfaf = [
        
    ];
    public function getConnection()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getConnection', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getMetadataFactory', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getExpressionBuilder', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'beginTransaction', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getCache', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getCache();
    }
    public function transactional($func)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'transactional', array('func' => $func), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'commit', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->commit();
    }
    public function rollback()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'rollback', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getClassMetadata', array('className' => $className), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'createQuery', array('dql' => $dql), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'createNamedQuery', array('name' => $name), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'createQueryBuilder', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'flush', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'clear', array('entityName' => $entityName), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->clear($entityName);
    }
    public function close()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'close', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->close();
    }
    public function persist($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'persist', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'remove', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'refresh', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'detach', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'merge', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'contains', array('entity' => $entity), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getEventManager', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getConfiguration', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'isOpen', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getUnitOfWork', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getProxyFactory', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'initializeObject', array('obj' => $obj), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'getFilters', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'isFiltersStateClean', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'hasFilters', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return $this->valueHoldere2cee->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerfaf56 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere2cee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2cee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere2cee->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__get', ['name' => $name], $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        if (isset(self::$publicProperties3cfaf[$name])) {
            return $this->valueHoldere2cee->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2cee;
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
        $targetObject = $this->valueHoldere2cee;
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
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2cee;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere2cee;
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
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__isset', array('name' => $name), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2cee;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere2cee;
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
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__unset', array('name' => $name), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2cee;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere2cee;
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
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__clone', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        $this->valueHoldere2cee = clone $this->valueHoldere2cee;
    }
    public function __sleep()
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__sleep', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        return array('valueHoldere2cee');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfaf56 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfaf56;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'initializeProxy', array(), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2cee;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2cee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
