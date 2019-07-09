<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class EmployeeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'employee.create',
        Tokens::PERMISSION_UPDATE => 'employee.update',
        Tokens::PERMISSION_SHOW   => 'employee.show',
        Tokens::PERMISSION_REMOVE => 'employee.remove',
    ];
}
