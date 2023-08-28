<?php

namespace Application\Factories;

use Application\Model\User;
use Application\Model\UsersTable;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class UsersTableFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): UsersTable
    {
        $tableGateway = $container->get('UsersTableGateway');
        return new UsersTable($tableGateway);
    }
}