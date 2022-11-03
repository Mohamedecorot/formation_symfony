<?php

namespace Container1QdsZwj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c3b8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b50a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c472 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        if ($this->valueHolder2c3b8 === $returnValue = $this->valueHolder2c3b8->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer5b50a = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2c3b8) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2c3b8 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__get', ['name' => $name], $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        if (isset(self::$publicProperties9c472[$name])) {
            return $this->valueHolder2c3b8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c3b8;

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

        $targetObject = $this->valueHolder2c3b8;
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
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c3b8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c3b8;
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
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__isset', array('name' => $name), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c3b8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c3b8;
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
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__unset', array('name' => $name), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c3b8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c3b8;
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
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__clone', array(), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        $this->valueHolder2c3b8 = clone $this->valueHolder2c3b8;
    }

    public function __sleep()
    {
        $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, '__sleep', array(), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;

        return array('valueHolder2c3b8');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b50a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b50a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b50a && ($this->initializer5b50a->__invoke($valueHolder2c3b8, $this, 'initializeProxy', array(), $this->initializer5b50a) || 1) && $this->valueHolder2c3b8 = $valueHolder2c3b8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c3b8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c3b8;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
