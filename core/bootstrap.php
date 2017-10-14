<?php
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
$app = [];
$app['config'] = require('core/database/config.php');
$connection = Connection::make($config['database']);
$app['database'] = new QueryBuilder($connection);
