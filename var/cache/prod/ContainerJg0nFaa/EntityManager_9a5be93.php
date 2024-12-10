<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder83827 = null;
    private $initializer76c67 = null;
    private static $publicProperties2f6de = [
        
    ];
    public function getConnection()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getConnection', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getMetadataFactory', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getExpressionBuilder', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'beginTransaction', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getCache', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getCache();
    }
    public function transactional($func)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'transactional', array('func' => $func), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'commit', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->commit();
    }
    public function rollback()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'rollback', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getClassMetadata', array('className' => $className), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'createQuery', array('dql' => $dql), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'createNamedQuery', array('name' => $name), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'createQueryBuilder', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'flush', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'clear', array('entityName' => $entityName), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->clear($entityName);
    }
    public function close()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'close', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->close();
    }
    public function persist($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'persist', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'remove', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'refresh', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'detach', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'merge', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'contains', array('entity' => $entity), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getEventManager', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getConfiguration', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'isOpen', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getUnitOfWork', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getProxyFactory', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'initializeObject', array('obj' => $obj), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'getFilters', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'isFiltersStateClean', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'hasFilters', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return $this->valueHolder83827->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer76c67 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder83827) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83827 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder83827->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__get', ['name' => $name], $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        if (isset(self::$publicProperties2f6de[$name])) {
            return $this->valueHolder83827->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83827;
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
        $targetObject = $this->valueHolder83827;
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
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83827;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder83827;
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
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__isset', array('name' => $name), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83827;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder83827;
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
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__unset', array('name' => $name), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83827;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder83827;
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
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__clone', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        $this->valueHolder83827 = clone $this->valueHolder83827;
    }
    public function __sleep()
    {
        $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, '__sleep', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
        return array('valueHolder83827');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76c67 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76c67;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer76c67 && ($this->initializer76c67->__invoke($valueHolder83827, $this, 'initializeProxy', array(), $this->initializer76c67) || 1) && $this->valueHolder83827 = $valueHolder83827;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83827;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83827;
    }
}
