<?php

class Connection {
  public static function make ($database) {
    try {
      return new PDO($database['dsn'], $database['name'], $database['password'], $database['options']);
    } catch (PDOException $e) {
      die ('failed' . $e->getMessage());
    }
  }
}

