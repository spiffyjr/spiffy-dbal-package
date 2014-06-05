<?php

namespace Spiffy\DBALPackage;
use Spiffy\Inject\Injector;

/**
 * @coversDefaultClass \Spiffy\DBALPackage\ConnectionFactory
 */
class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers :;__construct, ::createService
     */
    public function testCreateService()
    {
        $config = include __DIR__ . '/../config/package.php';
        $f = new ConnectionFactory($config['dbal']['main']);
        $this->assertInstanceOf('Doctrine\DBAL\Connection', $f->createService(new Injector()));
    }
}
