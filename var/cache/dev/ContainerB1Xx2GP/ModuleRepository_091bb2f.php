<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38bab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4dcc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9f19e = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getList', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getInstalledModules', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getMustBeConfiguredModules', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getUpgradableModules', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'setActionUrls', array('collection' => $collection), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerd4dcc = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder38bab) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder38bab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder38bab->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__get', ['name' => $name], $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        if (isset(self::$publicProperties9f19e[$name])) {
            return $this->valueHolder38bab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38bab;

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

        $targetObject = $this->valueHolder38bab;
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
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38bab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38bab;
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
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__isset', array('name' => $name), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38bab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38bab;
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
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__unset', array('name' => $name), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38bab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38bab;
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
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__clone', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        $this->valueHolder38bab = clone $this->valueHolder38bab;
    }

    public function __sleep()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__sleep', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return array('valueHolder38bab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4dcc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4dcc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'initializeProxy', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38bab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38bab;
    }
}
