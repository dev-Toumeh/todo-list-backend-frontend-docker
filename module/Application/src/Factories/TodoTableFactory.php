<?php

namespace Application\Factories;

use Application\Model\Todo;
use Application\Model\TodoTable;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class TodoTableFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): TodoTable
    {
        $tableGateway = $container->get('UsersTableGateway');
        return new TodoTable($tableGateway);
    }
}