<?php

namespace Container28Y4sRN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56ecb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59bc6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88cbf = [
        
    ];

    public function getConnection()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getConnection', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getMetadataFactory', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getExpressionBuilder', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'beginTransaction', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getCache', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'transactional', array('func' => $func), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'commit', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->commit();
    }

    public function rollback()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'rollback', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getClassMetadata', array('className' => $className), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'createQuery', array('dql' => $dql), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'createNamedQuery', array('name' => $name), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'createQueryBuilder', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'flush', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'clear', array('entityName' => $entityName), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->clear($entityName);
    }

    public function close()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'close', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->close();
    }

    public function persist($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'persist', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'remove', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'refresh', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'detach', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'merge', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'contains', array('entity' => $entity), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getEventManager', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getConfiguration', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'isOpen', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getUnitOfWork', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getProxyFactory', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'initializeObject', array('obj' => $obj), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'getFilters', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'isFiltersStateClean', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'hasFilters', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return $this->valueHolder56ecb->hasFilters();
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

        $instance->initializer59bc6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder56ecb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56ecb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56ecb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__get', ['name' => $name], $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        if (isset(self::$publicProperties88cbf[$name])) {
            return $this->valueHolder56ecb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56ecb;

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

        $targetObject = $this->valueHolder56ecb;
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
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56ecb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56ecb;
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
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__isset', array('name' => $name), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56ecb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56ecb;
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
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__unset', array('name' => $name), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56ecb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56ecb;
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
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__clone', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        $this->valueHolder56ecb = clone $this->valueHolder56ecb;
    }

    public function __sleep()
    {
        $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, '__sleep', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;

        return array('valueHolder56ecb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer59bc6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer59bc6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer59bc6 && ($this->initializer59bc6->__invoke($valueHolder56ecb, $this, 'initializeProxy', array(), $this->initializer59bc6) || 1) && $this->valueHolder56ecb = $valueHolder56ecb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56ecb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56ecb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
