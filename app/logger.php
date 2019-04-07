<?php

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
 

