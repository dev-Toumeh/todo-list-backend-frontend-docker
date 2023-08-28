<?php

declare(strict_types=1);

namespace Application;

use Application\Factories\UsersTableFactory;
use Application\Factories\UsersTableGatewayFactory;

class Module
{
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        return $config;
    }

    public function getServiceConfig(): array
    {
        return [
            'factories' => [
                'UsersTableGateway' => UsersTableGatewayFactory::class,
                'Application\Model\UsersTable' => UsersTableFactory::class
            ]
        ];
    }
}
