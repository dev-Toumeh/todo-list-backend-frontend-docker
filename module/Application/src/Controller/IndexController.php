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
    public function indexAction()//: JsonModel
    {
        $request = $this->getRequest();

        if($request->isPost()) {
          //  return new JsonModel($this->todoTable->getTodoList());

        } else {

        return new JsonModel($this->todoTable->getTodoList());
        }
    }
}
