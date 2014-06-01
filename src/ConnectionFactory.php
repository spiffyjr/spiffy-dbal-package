<?php

namespace Spiffy\DBALPackage;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Spiffy\Inject\Injector;
use Spiffy\Inject\ServiceFactory;

class ConnectionFactory implements ServiceFactory
{
    /**
     * @var array
     */
    private $connection;

    /**
     * @var Configuration
     */
    private $config;

    /**
     * @param array $connection
     * @param Configuration $config
     */
    final public function __construct(array $connection, Configuration $config = null)
    {
        $this->connection = $connection;
        $this->config = $config;
    }

    /**
     * @param Injector $i
     * @return Connection
     */
    final public function createService(Injector $i)
    {
        return DriverManager::getConnection($this->connection, $this->config);
    }
}
