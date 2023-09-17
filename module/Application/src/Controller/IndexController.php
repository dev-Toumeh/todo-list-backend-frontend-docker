<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\TodoTable;
use Exception;
use Laminas\Mvc\Controller\AbstractActionController;


class IndexController extends AbstractActionController
{
    private TodoTable|null $todoTable = null;

    public function __construct(TodoTable $usersTable)

    {
        $this->todoTable = $usersTable;
    }


    /**
     * @throws Exception
     */
    public function indexAction(): void
    {
//        $view = new ViewModel();
//        $row = $model->getByID(1);
//        $view->setVariable('id', $row->getid());
//        $view->setVariable('todo', $row->getTodo());
//        $view->setVariable('completed', $row->getCompleted());
//        $view->setTemplate('application/index/index');
//        return $view;
        var_dump($this->todoTable->getTodoList());
    }
}
