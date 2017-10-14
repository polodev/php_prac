<?php

class Connection {
  public static function make () {
    try {
      return new PDO('mysql:dbname=mytodo;host=localhost', 'root', '');
    } catch (PDOException $e) {
      die ('failed' . $e->getMessage());
    }
  }
}

