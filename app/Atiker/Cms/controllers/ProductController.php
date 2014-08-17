<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Product\ProductInterface;
use View;
use App;

class ProductController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.products';

    /**
     * Construct Shit
     */
    public function __construct(ProductInterface $product)
    {
        $this->model = $product;
        parent::__construct();
    }

    public function getNew(){
        if( !View::exists( $this->view_key.'.new' ) )
            return App::abort(404, 'Page not found');
        $kategori = App::make("Atiker\LaravelBootstrap\Categories\CategoryInterface");
        $categories = array(""=>"SEÇİNİZ") + $kategori->getKategoriList();
        
        return View::make($this->view_key.'.new',compact("categories"));
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

        $kategori = App::make("Atiker\LaravelBootstrap\Categories\CategoryInterface");
        $kategoriler = array(""=>"SEÇİNİZ") + $kategori->getKategoriList();

        return View::make($this->view_key.'.edit',compact("item","kategoriler"));

    }

}