<?php

namespace ContainerKfaTC7z;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHoldere2cee = null;
    private $initializerfaf56 = null;
    private static $publicProperties3cfaf = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        if ($this->valueHoldere2cee === $returnValue = $this->valueHoldere2cee->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializerfaf56 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHoldere2cee) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere2cee = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerfaf56 && ($this->initializerfaf56->__invoke($valueHoldere2cee, $this, '__get', ['name' => $name], $this->initializerfaf56) || 1) && $this->valueHoldere2cee = $valueHoldere2cee;
        if (isset(self::$publicProperties3cfaf[$name])) {
            return $this->valueHoldere2cee->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
