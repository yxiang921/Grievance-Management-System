<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Database::class, function ($app) {
            $factory = (new Factory)
                ->withServiceAccount(config('firebase.credentials'))
                ->withDatabaseUri(config('firebase.database_uri'));
            return $factory->createDatabase();
        });
    }

    public function boot()
    {
        //
    }
}
