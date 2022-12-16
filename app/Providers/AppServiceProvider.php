<?php

namespace App\Providers;

use App\Repository\Kendaraan\Repository;
use App\Repository\Kendaraan\RepositoryImplement;
use App\Repository\Penjualan\Repository as PenjualanRepository;
use App\Repository\Penjualan\RepositoryImplement as PenjualanRepositoryImplement;
use App\Services\Kendaraan\Services;
use App\Services\Kendaraan\ServicesImplement;
use App\Services\Penjualan\Services as PenjualanServices;
use App\Services\Penjualan\ServicesImplement as PenjualanServicesImplement;
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
        $this->app->bind(PenjualanServices::class, PenjualanServicesImplement::class);
        $this->app->bind(PenjualanRepository::class, PenjualanRepositoryImplement::class);
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
