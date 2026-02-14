<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('siteSettings', SiteSetting::first());
        });


        View::composer('*', function ($view) {
            $unreadCount = Contact::where('status', 1)->count();
            $latestContacts = Contact::latest()->take(10)->where('status', 1)->get();
            $view->with([
                'globalUnreadCount' => $unreadCount,
                'latestContacts' => $latestContacts
            ]);
        });



    }
}
