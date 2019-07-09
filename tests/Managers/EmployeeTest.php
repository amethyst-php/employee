<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\EmployeeFaker;
use Amethyst\Managers\EmployeeManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class EmployeeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = EmployeeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = EmployeeFaker::class;
}
