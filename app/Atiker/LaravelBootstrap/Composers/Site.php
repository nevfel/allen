<?php
namespace Atiker\LaravelBootstrap\Composers;
use Illuminate\Support\MessageBag;
use Auth, Session, Config, App;

class Site{

    /**
     * Compose the view with the following variables bound do it
     * @param  View $view The View
     * @return null
     */
    public function compose($view)
    {
        $menus = App::make('Atiker\LaravelBootstrap\Menu\MenuInterface');
        $tags = App::make('Atiker\LaravelBootstrap\Tags\TagsInterface');

        $view->with('nav', $menus->getNavList())
             ->with('tags',$tags->getTagsRandom(15));
    }

}