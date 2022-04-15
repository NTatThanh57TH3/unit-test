<?php


namespace Tests;


use Illuminate\Contracts\Console\Kernel;

class MakeApplication
{
    private static $app;

    public static function getApp(){
        self::$app = require __DIR__.'/../bootstrap/app.php';

        self::$app->loadEnvironmentFrom('.env.testing'); // specify the file to use for environment, must be run before boostrap

        self::$app->make(Kernel::class)->bootstrap();

        return self::$app;
    }
}