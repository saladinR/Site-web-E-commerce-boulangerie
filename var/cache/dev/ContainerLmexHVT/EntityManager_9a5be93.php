<?php

namespace ContainerLmexHVT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera760c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1b6a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51bd0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getConnection', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getMetadataFactory', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getExpressionBuilder', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'beginTransaction', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getCache', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'transactional', array('func' => $func), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->transactional($func);
    }

    public function commit()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'commit', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->commit();
    }

    public function rollback()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'rollback', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getClassMetadata', array('className' => $className), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'createQuery', array('dql' => $dql), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'createNamedQuery', array('name' => $name), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'createQueryBuilder', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'flush', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'clear', array('entityName' => $entityName), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->clear($entityName);
    }

    public function close()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'close', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->close();
    }

    public function persist($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'persist', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'remove', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'refresh', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'detach', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'merge', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'contains', array('entity' => $entity), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getEventManager', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getConfiguration', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'isOpen', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getUnitOfWork', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getProxyFactory', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'initializeObject', array('obj' => $obj), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'getFilters', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'isFiltersStateClean', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'hasFilters', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return $this->valueHoldera760c->hasFilters();
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

        $instance->initializer1b6a7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera760c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera760c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera760c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__get', ['name' => $name], $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        if (isset(self::$publicProperties51bd0[$name])) {
            return $this->valueHoldera760c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera760c;

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

        $targetObject = $this->valueHoldera760c;
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
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera760c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera760c;
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
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__isset', array('name' => $name), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera760c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera760c;
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
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__unset', array('name' => $name), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera760c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera760c;
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
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__clone', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        $this->valueHoldera760c = clone $this->valueHoldera760c;
    }

    public function __sleep()
    {
        $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, '__sleep', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;

        return array('valueHoldera760c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1b6a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1b6a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1b6a7 && ($this->initializer1b6a7->__invoke($valueHoldera760c, $this, 'initializeProxy', array(), $this->initializer1b6a7) || 1) && $this->valueHoldera760c = $valueHoldera760c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera760c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera760c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
