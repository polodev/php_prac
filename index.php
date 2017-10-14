<?php
$query = require('bootstrap.php');
$tasks = $query->selectAll();
require ('index.view.php');