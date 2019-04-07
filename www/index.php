<?php
require '../config.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;
R::setup('sqlite:/tmp/dbfile.db');
R::freeze( $rb_freeze );

Flight::register('tpl', 'raelgc\view\Template', ['main.html', ['tpl_path' => TPL_PATH]]);

// Routes ----------------
Flight::route('/', ['USPdev\View\View', 'hello']);
Flight::route('/add', ['USPdev\View\View', 'add']);

Flight::start();
