<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getConnection', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getMetadataFactory', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getExpressionBuilder', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'beginTransaction', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getCache', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'transactional', array('func' => $func), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'commit', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->commit();
    }

    public function rollback()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'rollback', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'createQuery', array('dql' => $dql), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'createQueryBuilder', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'flush', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'clear', array('entityName' => $entityName), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'close', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->close();
    }

    public function persist($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'persist', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'remove', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'refresh', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'detach', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'merge', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'contains', array('entity' => $entity), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getEventManager', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getConfiguration', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'isOpen', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getUnitOfWork', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getProxyFactory', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'getFilters', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'isFiltersStateClean', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, 'hasFilters', array(), $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        return $this->valueHolder38bab->hasFilters();
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

        $instance->initializerd4dcc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder38bab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38bab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38bab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4dcc && ($this->initializerd4dcc->__invoke($valueHolder38bab, $this, '__get', ['name' => $name], $this->initializerd4dcc) || 1) && $this->valueHolder38bab = $valueHolder38bab;

        if (isset(self::$publicProperties9f19e[$name])) {
            return $this->valueHolder38bab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
