<?php
use \RedBeanPHP\R as R;
R::setup('sqlite:/tmp/dbfile.db');
R::freeze( $rb_freeze );
//$log->info('Database in freeze mode', array('username' => 'Seldaek'));
