<?php
function connect_to_db () {
  try {
    return new PDO('mysql:dbname=mytodo;host=localhost', 'root', '');
  } catch (PDOException $e) {
    die ('failed' . $e->getMessage());
  }
}

function all_task($connection) {
  $statement = $connection->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}