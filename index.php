<?php
include 'function.php';
if (!isset($_SESSION)) session_start();
spl_autoload_register('autoLoadClass');

$c= getIndex('controller','ProductController');
$obj = new $c();
