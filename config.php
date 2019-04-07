<?php
require '../vendor/autoload.php';
use \RedBeanPHP\R as R;
R::setup('sqlite:/tmp/dbfile.db');

define('TPL_PATH', __DIR__ . '/template/default/');

