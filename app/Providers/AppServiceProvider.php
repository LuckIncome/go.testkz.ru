<?php

namespace App\Providers;

use App\Models\Contact;
use TCG\Voyager\Models\Page;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Http\Controllers\ContentTypes\Image;
use TCG\Voyager\Http\Controllers\ContentTypes\MultipleImage;
use TCG\Voyager\Http\Controllers\Controller;
use TCG\Voyager\Http\Controllers\VoyagerController;
use TCG\Voyager\Http\Controllers\VoyagerSettingsController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VoyagerBaseController::class, \App\Http\Controllers\Voyager\VoyagerBaseController::class);
        $this->app->bind(VoyagerController::class, \App\Http\Controllers\Voyager\VoyagerController::class);
        $this->app->bind(Controller::class, \App\Http\Controllers\Voyager\Controller::class);
        $this->app->bind(VoyagerSettingsController::class, \App\Http\Controllers\Voyager\VoyagerSettingsController::class);
        $this->app->bind(Image::class, \App\Http\Controllers\Voyager\ContentTypes\Image::class);
        $this->app->bind(MultipleImage::class, \App\Http\Controllers\Voyager\ContentTypes\MultipleImage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 

        view()->composer('*', function ($view) {
            $view->with('locale', session()->get('locale'));
            $view->with('fallbackLocale', config('voyager.multilingual.default'));
        });
        view()->composer(['partials.header','partials.footer','pages.contacts','pages.home'], function ($view)
        {
            $locale = session()->get('locale');
            $fallbackLocale = config('voyager.multilingual.default');

            $phones = Contact::where('type','phone')
                ->where('status',true)
                ->orderBy('sort_id')
                ->get();
            $view->with('phones',$phones);

            $emails = Contact::where('type','email')
                ->where('status',true)
                ->orderBy('sort_id')
                ->get();
            $view->with('emails',$emails);

            $adresses = Contact::where('type','address')
                ->where('status',true)
                ->orderBy('sort_id')
                ->get()
                ->translate($locale, $fallbackLocale);
            $view->with('adresses',$adresses);

            $socials_black = Contact::where('type','social')
                ->where('value', 'BLACK')
                ->where('status',true)
                ->orderBy('sort_id')
                ->get();
            $view->with('socials_black',$socials_black);

            $socials_white = Contact::where('type','social')
                ->where('value', 'WHITE')
                ->where('status',true)
                ->orderBy('sort_id')
                ->get();
            $view->with('socials_white',$socials_white);

            $map = Contact::where('type','map')
                ->where('status',true)
                ->first();
            $view->with('map',$map);

            $pages = Page::withTranslation($locale)->whereNotIn('type',['home'])->where('status',Page::STATUS_ACTIVE)->get();
            $pages = $pages->translate($locale,$fallbackLocale);
            $pages = $pages->groupBy('type');
            $view->with('pages',$pages);
        });
    }
}
