<?php

namespace Forrence\MigrateMake;

use Illuminate\Support\ServiceProvider;
use Forrence\MigrateMake\MigrateMakeCommand;

class MigrateMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        // ...
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([MigrateMakeCommand::class]);
        }
    }
}
