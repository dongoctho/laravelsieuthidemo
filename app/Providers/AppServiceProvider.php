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
        //
    }


    public $bindings = [
        \App\Repositories\Contracts\RepositoryInterface\CategoryRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\CategoryRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\productRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\productRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\hanghoaRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\hanghoaRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\ProducerRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\ProducerRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\StaffRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\StaffRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\ClientRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\ClientRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\OrderRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\OrderRepository::class,
        \App\Repositories\Contracts\RepositoryInterface\CartRepositoryInterface::class
        => \App\Repositories\Contracts\Repository\CartRepository::class
    ];

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
