<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Employee                 newEntity()
 * @method \Amethyst\Schemas\EmployeeSchema          getSchema()
 * @method \Amethyst\Repositories\EmployeeRepository getRepository()
 * @method \Amethyst\Serializers\EmployeeSerializer  getSerializer()
 * @method \Amethyst\Validators\EmployeeValidator    getValidator()
 * @method \Amethyst\Authorizers\EmployeeAuthorizer  getAuthorizer()
 */
class EmployeeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.employee.data.employee';
}
