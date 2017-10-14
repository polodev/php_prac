<?php

require 'Task.php';
require 'functions.php';
$connection = connect_to_db();
$tasks = fetch_all_task($connection);
require ('index.view.php');