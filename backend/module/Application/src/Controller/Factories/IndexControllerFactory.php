<?php

namespace Application\Controller\Factories;

use Application\Controller\IndexController;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class IndexControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): IndexController
    {
        $userService = $container->get('Application\Model\UsersTable');
        return new IndexController($userService);
    }
}