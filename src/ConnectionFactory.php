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
     * @var \Doctrine\DBAL\Configuration
     */
    private $config;

    /**
     * @param array $connection
     * @param \Doctrine\DBAL\Configuration $config
     */
    final public function __construct(array $connection, Configuration $config = null)
    {
        $this->connection = $connection;
        $this->config = $config;
    }

    /**
     * @param \Spiffy\Inject\Injector $i
     * @return \Doctrine\DBAL\Connection
     */
    final public function createService(Injector $i)
    {
        return DriverManager::getConnection($this->connection, $this->config);
    }
}
