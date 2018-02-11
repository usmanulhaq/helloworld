<?php

namespace usmanulhaq\helloworld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
        include __DIR__.'/../myclasses/MyClass.php';

    }
}


