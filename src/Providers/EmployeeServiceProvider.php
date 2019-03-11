<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class EmployeeServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\LegalEntityServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\OfficeServiceProvider::class);
    }
}
