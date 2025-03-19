<?php

namespace Mvc\controllers;

class WelcomeController
{
    public function index() {
        require VIEW_DIR.'/welcome.view.php';
    }
}