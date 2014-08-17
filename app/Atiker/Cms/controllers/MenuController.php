<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Menu\MenuInterface;
use Illuminate\Support\MessageBag;
use View;
use Input;
use Redirect;

class MenuController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.menu';

    /**
     * Construct Shit
     */
    public function __construct(MenuInterface $menus )
    {
        $this->model = $menus;
        parent::__construct();
    }

    public function getIndex()
    {
        $html =  $this->model->getMenuList();
        return View::make( $this->view_key.'.index' ,compact("html"));
    }
     /**
     * The generic method for the start of editing something
     * @return View
     */
    public function getEdit( $id )
    {
        try{
            $item = $this->model->requireById($id);
        } catch( EntityNotFoundException $e ){
            return Redirect::to( $this->object_url )->with('errors', new MessageBag( array("ID:$id nolu nesne bulunamadı.") ) );
        }
        
        if( !View::exists($this->view_key.'.edit' ) )
            return App::abort(404, 'Page not found');

        $alt_menu = $this->model->getAltMenus($id);
        $alt_menu_slugs = $this->model->getAltMenuSlugs($id);
        $tum_menu = $this->model->getTumMenu();
        
            return View::make($this->view_key.'.edit',compact("item","alt_menu","alt_menu_slugs","tum_menu"));

    }

    public function postEdit( $id )
    {
        $record = $this->model->requireById( $id );
        if(Input::has("sil"))
        {
            $this->model->getBeforeDelete($id);
            $this->model->delete($record);
            return Redirect::to("dashboard/menu")->with( 'success' , new MessageBag( array( 'Silindi' ) ) );;
        }
        $record->fill( Input::all() );

        $valid = $this->validateWithInput === true ? $record->isValid( Input::all() ) : $record->isValid();

        if( !$valid )
            return Redirect::to( $this->edit_url.$id )->with( 'errors' , $record->getErrors() )->withInput();

       
        $record->hydrate2()->save();
        $menus =  Input::get("menus");

        $alt_menu_slugs = $this->model->getAltMenuSlugs($id);
        
        if(count($menus))
        {
            foreach ($menus as $m) {
                $s = explode("|",$m);
                $route = $s[0];
                $slug = $s[1];
                $title = $s[2];
                $menu = $this->model->getMenuBySlug($id,$slug);
                if(($key = array_search($slug, $alt_menu_slugs)) !== false) {
                    unset($alt_menu_slugs[$key]);
                }
                if(!$menu)
                {
                    $this->model->store(array("title"=>$title,"slug"=>$slug,"parent_id"=>$id,"route"=>$route));
                }

            }
        }
        if(count($alt_menu_slugs))
        {
            foreach ($alt_menu_slugs as $key => $slug) {
                $this->model->deleteBySlug($id,$slug);
            }
        }
       
        return Redirect::to( $this->edit_url.$id )->with( 'success' , new MessageBag( array( 'Güncellendi' ) ) );
    }

    public function postSave()
    {
        $data = Input::get("data");
        $this->model->postMenuSave($data);
    }
}