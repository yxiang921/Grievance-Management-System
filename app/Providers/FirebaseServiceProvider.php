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
                ->withServiceAccount(base_path('storage/grievance-c6837-firebase-adminsdk-bme95-fd00e3c834.json'))
                ->withDatabaseUri('https://grievance-c6837-default-rtdb.firebaseio.com/');

            return $factory->createDatabase();
        });
    }

    public function boot()
    {
        //
    }
}
