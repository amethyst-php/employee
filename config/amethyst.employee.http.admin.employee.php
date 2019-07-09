<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\EmployeesController::class,
    'router'     => [
        'as'     => 'employee.',
        'prefix' => '/employees',
    ],
];
