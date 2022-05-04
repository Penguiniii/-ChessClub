<?php

namespace ContainerKSbkxGD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8c464 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9bf97 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1cf65 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getConnection', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getMetadataFactory', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getExpressionBuilder', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'beginTransaction', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getCache', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'transactional', array('func' => $func), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'commit', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->commit();
    }

    public function rollback()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'rollback', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getClassMetadata', array('className' => $className), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'createQuery', array('dql' => $dql), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'createNamedQuery', array('name' => $name), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'createQueryBuilder', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'flush', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'clear', array('entityName' => $entityName), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->clear($entityName);
    }

    public function close()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'close', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->close();
    }

    public function persist($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'persist', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'remove', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'refresh', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'detach', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'merge', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'contains', array('entity' => $entity), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getEventManager', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getConfiguration', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'isOpen', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getUnitOfWork', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getProxyFactory', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'initializeObject', array('obj' => $obj), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'getFilters', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'isFiltersStateClean', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'hasFilters', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return $this->valueHolder8c464->hasFilters();
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

        $instance->initializer9bf97 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8c464) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c464 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8c464->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__get', ['name' => $name], $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        if (isset(self::$publicProperties1cf65[$name])) {
            return $this->valueHolder8c464->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c464;

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

        $targetObject = $this->valueHolder8c464;
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
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c464;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8c464;
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
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__isset', array('name' => $name), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c464;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8c464;
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
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__unset', array('name' => $name), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c464;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8c464;
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
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__clone', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        $this->valueHolder8c464 = clone $this->valueHolder8c464;
    }

    public function __sleep()
    {
        $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, '__sleep', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;

        return array('valueHolder8c464');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9bf97 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9bf97;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9bf97 && ($this->initializer9bf97->__invoke($valueHolder8c464, $this, 'initializeProxy', array(), $this->initializer9bf97) || 1) && $this->valueHolder8c464 = $valueHolder8c464;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c464;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c464;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
