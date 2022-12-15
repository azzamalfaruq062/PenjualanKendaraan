<?php

namespace App\Providers;

use App\Repository\Kendaraan\Repository;
use App\Repository\Kendaraan\RepositoryImplement;
use App\Services\Kendaraan\Services;
use App\Services\Kendaraan\ServicesImplement;
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
        $this->app->bind(Services::class, ServicesImplement::class);
        $this->app->bind(Repository::class, RepositoryImplement::class);
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
