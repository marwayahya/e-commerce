<?php

namespace ContainerNTnhWJ4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6c49b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7c036 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d35d = [
        
    ];

    public function getConnection()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getConnection', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getMetadataFactory', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getExpressionBuilder', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'beginTransaction', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getCache', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'transactional', array('func' => $func), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'commit', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->commit();
    }

    public function rollback()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'rollback', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getClassMetadata', array('className' => $className), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'createQuery', array('dql' => $dql), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'createNamedQuery', array('name' => $name), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'createQueryBuilder', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'flush', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'clear', array('entityName' => $entityName), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->clear($entityName);
    }

    public function close()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'close', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->close();
    }

    public function persist($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'persist', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'remove', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'refresh', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'detach', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'merge', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'contains', array('entity' => $entity), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getEventManager', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getConfiguration', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'isOpen', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getUnitOfWork', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getProxyFactory', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'initializeObject', array('obj' => $obj), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'getFilters', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'isFiltersStateClean', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'hasFilters', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return $this->valueHolder6c49b->hasFilters();
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

        $instance->initializer7c036 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6c49b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6c49b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6c49b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__get', ['name' => $name], $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        if (isset(self::$publicProperties3d35d[$name])) {
            return $this->valueHolder6c49b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c49b;

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

        $targetObject = $this->valueHolder6c49b;
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
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c49b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6c49b;
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
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__isset', array('name' => $name), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c49b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6c49b;
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
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__unset', array('name' => $name), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6c49b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6c49b;
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
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__clone', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        $this->valueHolder6c49b = clone $this->valueHolder6c49b;
    }

    public function __sleep()
    {
        $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, '__sleep', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;

        return array('valueHolder6c49b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7c036 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7c036;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7c036 && ($this->initializer7c036->__invoke($valueHolder6c49b, $this, 'initializeProxy', array(), $this->initializer7c036) || 1) && $this->valueHolder6c49b = $valueHolder6c49b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6c49b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6c49b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
