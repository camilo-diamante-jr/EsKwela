<?php

class TransactionModel
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}
