<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;

class TestTodoList extends AbstractActionController
{
    public function todolistAction(): JsonModel
    {
        $data = [
            [
                "id" => '222',
                "title" => 'Buy groceries',
                "completed" => 0
            ],
            [
                "id" => '34343hhhg',
                "title" => 'Call mom',
                "completed" => 0
            ],
            [
                "id" => "34343hhfffhg",
                "title" => 'Call dad',
                "completed" => 0
            ]
        ];

        return new JsonModel($data, ['terminate' => true]);
    }
}
