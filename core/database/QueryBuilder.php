<?php

class QueryBuilder {
  protected $connection;
  public function __construct ($connection) {
    $this->connection = $connection;
  }
  public function selectAll () {
    $statement = $this->connection->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}
