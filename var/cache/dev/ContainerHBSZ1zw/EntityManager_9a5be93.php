<?php

namespace ContainerHBSZ1zw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2465c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2a3b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a9a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getConnection', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getMetadataFactory', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getExpressionBuilder', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'beginTransaction', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getCache', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'transactional', array('func' => $func), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->transactional($func);
    }

    public function commit()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'commit', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->commit();
    }

    public function rollback()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'rollback', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getClassMetadata', array('className' => $className), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'createQuery', array('dql' => $dql), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'createNamedQuery', array('name' => $name), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'createQueryBuilder', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'flush', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'clear', array('entityName' => $entityName), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->clear($entityName);
    }

    public function close()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'close', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->close();
    }

    public function persist($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'persist', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'remove', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'refresh', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'detach', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'merge', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'contains', array('entity' => $entity), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getEventManager', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getConfiguration', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'isOpen', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getUnitOfWork', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getProxyFactory', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'initializeObject', array('obj' => $obj), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'getFilters', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'isFiltersStateClean', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'hasFilters', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return $this->valueHolder2465c->hasFilters();
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

        $instance->initializera2a3b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2465c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2465c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2465c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__get', ['name' => $name], $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        if (isset(self::$publicProperties5a9a6[$name])) {
            return $this->valueHolder2465c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2465c;

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

        $targetObject = $this->valueHolder2465c;
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
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2465c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2465c;
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
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__isset', array('name' => $name), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2465c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2465c;
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
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__unset', array('name' => $name), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2465c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2465c;
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
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__clone', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        $this->valueHolder2465c = clone $this->valueHolder2465c;
    }

    public function __sleep()
    {
        $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, '__sleep', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;

        return array('valueHolder2465c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2a3b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2a3b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2a3b && ($this->initializera2a3b->__invoke($valueHolder2465c, $this, 'initializeProxy', array(), $this->initializera2a3b) || 1) && $this->valueHolder2465c = $valueHolder2465c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2465c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2465c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
