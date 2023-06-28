<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();

        $banner_data = Banner::where('id',1)->first();
        // $settings_data = Setting::where('id',1)->first();
        view()->share('global_banner_data', $banner_data);
        // view()->share('global_settings_data', $settings_data);
    }
}
