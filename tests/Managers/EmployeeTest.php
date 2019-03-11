<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\EmployeeFaker;
use Railken\Amethyst\Managers\EmployeeManager;
use Railken\Amethyst\Tests\BaseTest;
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
