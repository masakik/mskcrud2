<?php
namespace USPdev\View;

use Flight;
use \RedBeanPHP\R as R;

class View
{
    public static function hello()
    {
        $tpl = Flight::tpl();
        $tpl->addFile("CORPO", "hello.html");
        $tpl->fulano = 'Masaki ' . rand(0, 10);
        $teste = R::findAll('teste');
        $tpl->rec = count($teste);
        Flight::tpl()->show();
    }

    public static function add()
    {
        $tpl = Flight::tpl();
        $teste = R::dispense('teste');
        $teste->nome = 'Masaki';
        $id = R::store($teste);
        $tpl->CORPO = $id;
        Flight::tpl()->show();
        $GLOBALS['log']->info('Adding a new record to database', array('id' => $id));

    }
}
