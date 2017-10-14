<?php
require('core/bootstrap.php');
$uri = Request::uri();
require Router::load('routes.php')->direct($uri);
