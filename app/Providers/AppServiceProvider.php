<?php

namespace Reposteria\Providers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
    
        Schema::defaultStringLength(191);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
