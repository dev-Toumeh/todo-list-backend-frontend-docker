<?php

namespace Application\Factories;

use Application\Model\Todo;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class TodoTableGatewayFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): TableGateway
    {
        $dbAdapter = $container->get('Laminas\Db\Adapter\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Todo());
        return new TableGateway('todo_list', $dbAdapter, null, $resultSetPrototype);
    }
}