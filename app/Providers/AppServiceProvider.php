<?php

namespace App\Providers;
use App\Models\Danhmuc;
use App\Models\Dichvu; 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        $dichvus = Dichvu::all();
        $danhmucs = Danhmuc::all();
        View::share('danhmucs',$danhmucs);
        View::share('dichvus',$dichvus);
    }
}
