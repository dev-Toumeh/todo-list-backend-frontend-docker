<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Todo;
use Application\Model\TodoTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;


class IndexController extends AbstractActionController
{
    private TodoTable|null $todoTable = null;

    public function __construct(TodoTable $todoTable)
    {
        $this->todoTable = $todoTable;
    }

    /**
     * @return JsonModel
     * @var $table Todo
     */
    public function indexAction(): JsonModel
    {
//        $view = new ViewModel();
//        $row = $model->getByID(1);
//        $view->setVariable('id', $row->getid());
//        $view->setVariable('todo', $row->getTodo());
//        $view->setVariable('completed', $row->getCompleted());
//        $view->setTemplate('application/index/index');
//        return $view;


//        $data = [
//            [
//                "id" => '222',
//                "title" => 'Buy groceries',
//                "completed" => 0
//            ],
//            [
//                "id" => '34343hhhg',
//                "title" => 'Call mom',
//                "completed" => 0
//            ],
//            [
//                "id" => "34343hhfffhg",
//                "title" => 'Call dad',
//                "completed" => 0
//            ]
//        ];

        return new JsonModel($this->todoTable->getTodoList());
    }
}
