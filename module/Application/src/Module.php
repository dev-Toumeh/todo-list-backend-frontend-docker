<?php

declare(strict_types=1);

namespace Application;

use Application\Factories\TodoTableFactory;
use Application\Factories\TodoTableGatewayFactory;

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
                'UsersTableGateway' => TodoTableGatewayFactory::class,
                'Application\Model\TodoTable' => TodoTableFactory::class
            ]
        ];
    }
}
