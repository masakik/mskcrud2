<?php
require '../config.php';
require '../vendor/autoload.php';
require '../app/logger.php';
require '../app/database.php';

Flight::register('tpl', 'raelgc\view\Template', ['main.html', ['tpl_path' => TPL_PATH]]);

// Routes ----------------
Flight::route('/', ['USPdev\View\View', 'hello']);
Flight::route('/add', ['USPdev\View\View', 'add']);

Flight::start();
