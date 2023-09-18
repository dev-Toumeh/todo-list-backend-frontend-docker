<?php

namespace Application\Model;

use Exception;
use Laminas\Db\ResultSet\ResultSetInterface;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\View\Model\JsonModel;

class TodoTable
{
    protected const ID = 'id';
    protected const TITLE = 'title';
    protected const COMPLETED = 'completed';
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
        $rowSet = $this->tableGateway->select([self::ID => $id]);
        $row = $rowSet->current();
        if (!$row) {

            throw new Exception('user not found with id:' . $id);
        }
        return $row;
    }

    /**
     * @return array
     * @var $row Todo
     */
    public function getTodoList(): array
    {
        $data = [];
        foreach ($this->tableGateway->select() as $row) {
            $data[] = [self::ID => $row->getId(),
                self::TITLE => $row->getTodo(),
                self::COMPLETED => $row->getCompleted()];
        }
        return $data;
    }
}