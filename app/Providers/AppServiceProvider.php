<?php

namespace App\Providers;

use App\Models\SidebarAdvertisement;
use App\Models\UpperAdvertisement;
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
        // $top_ad_data = UpperAdvertisement::where('id', 1)->first();
        // $sidebar_top_ad = SidebarAdvertisement::where('sidebar_ad_location', 'Top')->get();
        // $sidebar_bottom_ad = SidebarAdvertisement::where('sidebar_ad_location', 'Bottom')->get();

        // view()->share('global_top_data', $top_ad_data);
        // view()->share('global_slidebar_top_ad', $sidebar_top_ad);
        // view()->share('global_slidebar_bottom_ad', $sidebar_bottom_ad);
    }
}
