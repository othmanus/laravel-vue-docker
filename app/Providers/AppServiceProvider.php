<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix the error: SQLSTATE[42000]: Syntax error or access violation:
        // 1071 Specified key was too long; max key length is 767 bytes
        Schema::defaultStringLength(191);
    }
}
