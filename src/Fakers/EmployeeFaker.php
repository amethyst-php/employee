<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class EmployeeFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('legal_entity', LegalEntityFaker::make()->parameters()->toArray());
        $bag->set('office', OfficeFaker::make()->parameters()->toArray());

        return $bag;
    }
}
