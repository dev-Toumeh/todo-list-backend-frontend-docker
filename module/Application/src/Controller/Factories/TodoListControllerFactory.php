<?php

namespace Application\Controller\Factories;

use Application\Controller\IndexController;
use Application\Controller\TodoController;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class TodoListControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): TodoController
    {
        $userService = $container->get('Application\Model\TodoTable');
        return new TodoController($userService);
    }
}