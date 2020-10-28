<?php

namespace App\Providers;

use App\Contact;
use App\Footer;
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
        $contact=Contact::first();
        $footer=Footer::first();
        return view()->share(['contact'=>$contact,'footer'=>$footer]);
    }
}
