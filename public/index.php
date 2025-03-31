<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../core/helpers/functions.php';

define('VIEW_DIR', __DIR__.'/../resources/views');
define('CONFIG_DIR', __DIR__.'/../config');
define('LANG_DIR', __DIR__.'/../lang');
define('MESSAGES', require LANG_DIR.'/fr/validation.php');
define('CONNEXION', __DIR__. '/../core/database');

session_start();

$router = new \Tecgdcs\Router;
$router->route();