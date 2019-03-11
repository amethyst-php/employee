<?php

return [
    'table'      => 'amethyst_employees',
    'comment'    => 'Employee',
    'model'      => Railken\Amethyst\Models\Employee::class,
    'schema'     => Railken\Amethyst\Schemas\EmployeeSchema::class,
    'repository' => Railken\Amethyst\Repositories\EmployeeRepository::class,
    'serializer' => Railken\Amethyst\Serializers\EmployeeSerializer::class,
    'validator'  => Railken\Amethyst\Validators\EmployeeValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\EmployeeAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\EmployeeFaker::class,
    'manager'    => Railken\Amethyst\Managers\EmployeeManager::class,
];
