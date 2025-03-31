<?php

return [
    [
        'uri' => '/', 'verb' => 'GET',
        'action' => [Mvc\Controllers\PageController::class, 'index']
    ],
    [
        'uri' => '/loss/create', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LossDeclarationController::class, 'create']
    ],
    [
        'uri' => '/loss', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LossDeclarationController::class, 'show']
    ],
    [
        'uri' => '/loss', 'verb' => 'GET',
        'action' => [Mvc\Controllers\LossDeclarationController::class, 'vue récapitulative']
    ],
];