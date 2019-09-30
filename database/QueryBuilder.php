<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function all($table, $dataClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $dataClass);
    }

    public function find($table, $field, $value, $dataClass)
    {
        $statement = $this->pdo->prepare("select * from {$table} where {$field} = {$value}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $dataClass);
    }

}
