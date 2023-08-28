<?php

namespace Application\Model;

use Exception;
use Laminas\Db\TableGateway\TableGateway;

class UsersTable
{

    private TableGateway $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;

    }

    /**
     * @throws Exception
     */
    public function getByID($id)
    {
        $id = (int)$id;
        $rowSet = $this->tableGateway->select(['id' => $id]);
        $row = $rowSet->current();
        if (!$row) {

            throw new Exception('user not found with id:' . $id);
        }
        return $row;
    }
}