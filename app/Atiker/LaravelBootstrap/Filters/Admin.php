<?php namespace Atiker\LaravelBootstrap\Filters;
use Auth, Redirect, Config;

class Admin {

    /**
     * If the user is not logged in then we need to get them outta here.
     * @return mixed
     */
    public function filter()
    {

        if ( Auth::guest() )
            return Redirect::guest( Config::get('atiker-cms.access_url').'/login');

    }

}