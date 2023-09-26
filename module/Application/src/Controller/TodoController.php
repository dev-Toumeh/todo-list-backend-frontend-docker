<?php

namespace Application\Controller;

use Application\Model\TodoTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;

class TodoController extends AbstractActionController
{
    private TodoTable $todoTable;

    public function __construct(TodoTable $todoTable)
    {
        $this->todoTable = $todoTable;
    }

    public function todolistAction(): JsonModel
    {
        return new JsonModel($this->todoTable->getTodoList());

    }

    private function  addTodoAction() {

    }
}
