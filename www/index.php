<?php
require '../config.php';
// $teste = R::dispense('teste');
// $teste->nome = 'Masaki';
// $id = R::store($teste);
// echo $id;
$tpl = new raelgc\view\Template("main.html", ['tpl_path' => TPL_PATH] );
Flight::route('/', function () {
    global $tpl;
    $tpl->addFile("CORPO", "hello.html");
    $tpl->fulano = 'Masaki';
});

Flight::start();
$tpl->show();