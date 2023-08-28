<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\UsersTable;
use Exception;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    private UsersTable|null $usersTable = null;

    public function __construct(UsersTable $usersTable)

    {
        $this->usersTable = $usersTable;
    }


    /**
     * @throws Exception
     */
    public function indexAction(): ViewModel {
        $view = new ViewModel();
        $model = $this->usersTable;
        $row = $model->getByID(1);
        $view->setVariable('id', $row->getid());
        $view->setVariable('username', $row->getUsername());
        $view->setVariable('password', $row->getPassword());
        $view->setTemplate('application/index/index');
        return $view;

    }
}
