<?php
namespace Atiker\LaravelBootstrap\Composers;
use Illuminate\Support\MessageBag;
use Auth, Session, Config, App;

class Page{

    /**
     * Compose the view with the following variables bound do it
     * @param  View $view The View
     * @return null
     */
    public function compose($view)
    {
        $settings = App::make('Atiker\LaravelBootstrap\Settings\SettingsInterface');

        $view->with('user', Auth::user())
             ->with('app_name', $settings->getAppName() )
             ->with('urlSegment', Config::get('atiker-cms.access_url') )
             ->with('menu_items', Config::get('atiker-cms.menu_items') )
             ->with('success', Session::get('success' , new MessageBag ) );
    }

}