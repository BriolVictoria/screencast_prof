<?php

return [
    [
        'uri' => '/', 'verb' => 'GET',
        'action' => [Mvc\Controllers\WelcomeController::class, 'index']
    ],
    [
        'uri' => '/loss/create', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LostController::class, 'create']
    ],
    [
        'uri' => '/loss', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LostController::class, 'show']
    ],
    [
        'uri' => '/loss', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LostController::class, 'vue récapitulative']
    ],
];