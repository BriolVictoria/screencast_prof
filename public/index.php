<?php
require __DIR__. '/../vendor/autoload.php';
session_start();



$countries = require '../config/countries.php';
$pet_types = require '../config/pet_types.php';
require '../core/helpers/functions.php';

define('VIEW_DIR', __DIR__ . '/../resources/views');
$router = new Tecgdcs\Router();
$router->route();


$_SESSION['errors'] = null;
$_SESSION['old'] = null;
