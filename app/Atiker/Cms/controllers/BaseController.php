<?php
namespace Atiker\Cms\Controllers;
use Illuminate\Routing\Controller;
use View, Config;

abstract class BaseController extends Controller{

    protected $whitelist = array();

    /**
     * The URL segment that can be used to access the system
     * @var string
     */
    protected $urlSegment;

    /**
     * Initializer.
     *
     * @access   public
     * @return   void
     */
    public function __construct()
    {

        // Achieve that segment
        $this->urlSegment = Config::get('atiker-cms.access_url');
        // Setup composed views and the variables that they require
        $this->beforeFilter( 'adminFilter' , array('except' => $this->whitelist) );
        $composed_views = array(
                    'admin.login',
                    'admin.dashboard',
                    'admin.posts.*',
                    'admin.blocks.*',
                    'admin.galleries.*',
                    'admin.categories.*',
                    'admin.settings.*',
                    'admin.users.*',
                    'admin.menu.*',
                    'admin.products.*',
                    'admin.brands.*',
                    'admin.entities.*'
                );
        View::composer($composed_views, 'Atiker\LaravelBootstrap\Composers\Page');
    }

}