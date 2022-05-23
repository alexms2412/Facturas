<?php

namespace ContainerPQZd9tl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        if ($this->valueHolder34b2c === $returnValue = $this->valueHolder34b2c->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerd5669 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder34b2c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder34b2c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd5669 && ($this->initializerd5669->__invoke($valueHolder34b2c, $this, '__get', ['name' => $name], $this->initializerd5669) || 1) && $this->valueHolder34b2c = $valueHolder34b2c;

        if (isset(self::$publicProperties893fc[$name])) {
            return $this->valueHolder34b2c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
