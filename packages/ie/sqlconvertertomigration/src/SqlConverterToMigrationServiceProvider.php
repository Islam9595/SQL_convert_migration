<?php

namespace Ie\SQlConverterToMigration;

use Illuminate\Support\ServiceProvider;

class SqlConverterToMigrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->app->make('ie/sqlconvertertomigration/src/SqlConverterToMigrationController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
