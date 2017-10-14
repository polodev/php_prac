<?php
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$connection = Connection::make();
return (new QueryBuilder($connection));
