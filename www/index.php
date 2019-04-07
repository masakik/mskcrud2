<?php
require '../config.php';
require '../vendor/autoload.php';

// load Monolog library
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\JsonFormatter;
   
// create a log channel
$log = new Logger('channel_name');
 
// create a Json formatter
$formatter = new JsonFormatter();
 
// create a handler
$stream = new StreamHandler(__DIR__.'/../application-json.log', Logger::DEBUG);
$stream->setFormatter($formatter);
 
// bind
$log->pushHandler($stream);
 
//$log->info('Adding a new user', array('username' => 'Seldaek'));

use \RedBeanPHP\R as R;
R::setup('sqlite:/tmp/dbfile.db');
R::freeze( $rb_freeze );

Flight::register('tpl', 'raelgc\view\Template', ['main.html', ['tpl_path' => TPL_PATH]]);

// Routes ----------------
Flight::route('/', ['USPdev\View\View', 'hello']);
Flight::route('/add', ['USPdev\View\View', 'add']);

Flight::start();
