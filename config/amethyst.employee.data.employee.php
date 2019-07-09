<?php

return [
    'table'      => 'amethyst_employees',
    'comment'    => 'Employee',
    'model'      => Amethyst\Models\Employee::class,
    'schema'     => Amethyst\Schemas\EmployeeSchema::class,
    'repository' => Amethyst\Repositories\EmployeeRepository::class,
    'serializer' => Amethyst\Serializers\EmployeeSerializer::class,
    'validator'  => Amethyst\Validators\EmployeeValidator::class,
    'authorizer' => Amethyst\Authorizers\EmployeeAuthorizer::class,
    'faker'      => Amethyst\Fakers\EmployeeFaker::class,
    'manager'    => Amethyst\Managers\EmployeeManager::class,
];
