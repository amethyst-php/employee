<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class EmployeeServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\LegalEntityServiceProvider::class);
        $this->app->register(\Amethyst\Providers\OfficeServiceProvider::class);
    }
}
