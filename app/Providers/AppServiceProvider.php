<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Interfaces\FuncionarioRepositoryInterface',
            'App\Repositories\FuncionarioRepository'
        );

        $this->app->bind(
            'App\Interfaces\AparelhoRepositoryInterface',
            'App\Repositories\AparelhoRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
