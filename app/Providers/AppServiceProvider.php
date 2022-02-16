<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Categorie;

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
        // if(Categorie::count() != 0){
        // $categories = Categorie::select('id', 'name')->get();

        // view::share('categories',$categories);
        // }
    }
}
