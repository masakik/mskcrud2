<?php
require '../config.php';
require '../vendor/autoload.php';
require '../app/logger.php';
require '../app/database.php';



$loader = new \Twig\Loader\FilesystemLoader('../template/default/');
$twig = new \Twig\Environment($loader, [
    'cache' => '../local/template_cache',
]);

echo $twig->render('main.html', ['nome' => 'Fabien']);
exit;
//use raelgc\view\Template;

Flight::register('tpl', 'raelgc\view\Template', ['main.html', ['tpl_path' => TPL_PATH]]);
define('VIEW', 'USPdev\View\View');
// Routes ----------------
Flight::route('/', [VIEW, 'hello']);
Flight::route('/add', [VIEW, 'add']);

Flight::start();
