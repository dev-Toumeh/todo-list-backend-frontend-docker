<?php

namespace Application\Factories;

use Application\Model\TodoTable;
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