<?php

namespace Application\Model;

use Exception;
use Laminas\Db\ResultSet\ResultSetInterface;
use Laminas\Db\TableGateway\TableGateway;

class TodoTable
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

    public function getTodoList(): ResultSetInterface
    {
        return $this->tableGateway->select();
    }
}