<?php
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require('database/config.php');
$connection = Connection::make($config['database']);
return (new QueryBuilder($connection));
