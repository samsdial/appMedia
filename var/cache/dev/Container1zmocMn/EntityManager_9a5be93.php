<?php

namespace Container1zmocMn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2efd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf34a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3498b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getConnection', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getMetadataFactory', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getExpressionBuilder', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'beginTransaction', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getCache', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'transactional', array('func' => $func), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->transactional($func);
    }

    public function commit()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'commit', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->commit();
    }

    public function rollback()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'rollback', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getClassMetadata', array('className' => $className), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'createQuery', array('dql' => $dql), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'createNamedQuery', array('name' => $name), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'createQueryBuilder', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'flush', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'clear', array('entityName' => $entityName), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->clear($entityName);
    }

    public function close()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'close', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->close();
    }

    public function persist($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'persist', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'remove', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'refresh', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'detach', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'merge', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'contains', array('entity' => $entity), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getEventManager', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getConfiguration', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'isOpen', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getUnitOfWork', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getProxyFactory', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'initializeObject', array('obj' => $obj), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'getFilters', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'isFiltersStateClean', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'hasFilters', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return $this->valueHoldera2efd->hasFilters();
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

        $instance->initializerf34a9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2efd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2efd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2efd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__get', ['name' => $name], $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        if (isset(self::$publicProperties3498b[$name])) {
            return $this->valueHoldera2efd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2efd;

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

        $targetObject = $this->valueHoldera2efd;
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
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2efd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2efd;
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
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__isset', array('name' => $name), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2efd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2efd;
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
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__unset', array('name' => $name), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2efd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2efd;
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
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__clone', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        $this->valueHoldera2efd = clone $this->valueHoldera2efd;
    }

    public function __sleep()
    {
        $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, '__sleep', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;

        return array('valueHoldera2efd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf34a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf34a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf34a9 && ($this->initializerf34a9->__invoke($valueHoldera2efd, $this, 'initializeProxy', array(), $this->initializerf34a9) || 1) && $this->valueHoldera2efd = $valueHoldera2efd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2efd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2efd;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
