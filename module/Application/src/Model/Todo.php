<?php

namespace Application\Model;

class Todo
{
    protected null|string $id;

    protected null|string $todo;

    protected int $completed;

    public function exchangeArray($row): void
    {
        $this->id = !empty($row['id']) ? $row['id'] : null;
        $this->todo = !empty($row['title']) ? $row['title'] : null;
        $this->completed = $row['completed'] ?? null;
    }

    public function getId(): ?string
    {
        return $this->id;

    }

    public function getTodo(): ?string
    {
        return $this->todo;

    }

    public function getCompleted(): ?int
    {
        return $this->completed;

    }
}