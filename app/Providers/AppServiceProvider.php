<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Catalog;
use Illuminate\Support\Facades\View;
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
        $catalogs = Catalog::orderBy('id')->get();
        $brands = Brand::orderBy('id')->get();
        View::share([
            'catalogs' => $catalogs,
            'brands' => $brands
        ]);
    }
}
