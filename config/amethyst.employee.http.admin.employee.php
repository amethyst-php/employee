<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\EmployeesController::class,
    'router'     => [
        'as'     => 'employee.',
        'prefix' => '/employees',
    ],
];
