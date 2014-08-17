<?php namespace Atiker\LaravelBootstrap\Menu;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use App;
use URL;

class MenuRepository extends EloquentBaseRepository implements MenuInterface
{


    /**
     * Construct Shit
     * @param Menus $menus
     */
    public function __construct( Menus $menus )
    {
        $this->model = $menus;
    }

    public function getAltMenus($id)
    {
    	return $this->model->where("parent_id",$id)->get();
    }

    public function getAltMenuSlugs($id)
    {
    	return $this->model->where("parent_id",$id)->lists("slug");
    }

    public function getTumMenu()
    {
    	$galleries = array("gallery"=>App::make("Atiker\LaravelBootstrap\Galleries\GalleriesInterface")->getAll()->lists("title","slug"));
        $posts = array("post"=>App::make("Atiker\LaravelBootstrap\Posts\PostsInterface")->getAll()->lists("title","slug"));
        $kategoriler =array("category"=> App::make("Atiker\LaravelBootstrap\Categories\CategoryInterface")->getAll()->lists("name","slug"));
        $tum_menu = $posts+$galleries+$kategoriler;
        return $tum_menu;
    }

    public function getMenuList()
    {

        $html = '';
        $menu0 = $this->model->where("parent_id",0)->orderBy("sort")->get();
        foreach ($menu0 as  $m) {
            $html.= '<li data-id="'.$m->id.'"><span class="glyphicon glyphicon-move">&nbsp;</span>&nbsp;'.$m->route.'&nbsp;&nbsp;<a href="'.URL::to("dashboard/menu/edit/".$m->id).'">'. $m->title.'</a>&nbsp;&nbsp;&nbsp;<a href="'.URL::to("dashboard/menu/edit/".$m->id).'">'.$m->slug.'</a>';
            $menu1 = $this->model->where("parent_id",$m->id)->orderBy("sort")->get();
            if($menu1)
            {
                $html.="<ol>";
                foreach ($menu1 as $m1) {
                   $html.= '<li data-id="'.$m1->id.'"><span class="glyphicon glyphicon-move"></span>&nbsp;'.$m1->route.'&nbsp;&nbsp;<a href="'. URL::to("dashboard/menu/edit/".$m1->id) .'">'. $m1->title.'</a>&nbsp;&nbsp;&nbsp;<a href="'.URL::to("dashboard/menu/edit/".$m1->id).'">'.$m1->slug.'</a></li>';
                }
                $html.="</ol></li>";
            }
            else
            {
                $html.="</li>";
            }
        }
        return $html;
    }

    public function getMenuBySlug($id,$slug)
    {
       return $this->model->where("parent_id",$id)->where("slug",$slug)->first();
    }

    public function postMenuSave($data)
    {
        $i= 0;
        foreach ($data[0] as $v) {

            echo $v["id"]."\n";
            $this->model->find($v["id"])->update(array("parent_id"=> 0,"sort"=>$i));
            $i++;
            if(isset($v["children"]))
            {
                foreach($v["children"][0] as $v1)
                {
                    echo "__".$v1["id"]."\n";
                    $this->model->find($v1["id"])->update(array("parent_id"=> $v["id"],"sort"=>$i));
                    $i++;
                    if(isset($v1["children"]))
                    {
                        foreach($v1["children"][0] as $v2)
                        {
                            echo "_____".$v2["id"]."\n";
                            $this->model->find($v2["id"])->update(array("parent_id"=> $v1["id"],"sort"=>$i));
                            $i++;
                        }
                    }
                }
            }
        }
    }

    public function getBeforeDelete($id)
    {
        $this->model->where("parent_id",$id)->update(array("parent_id"=>0));
    }

    public function deleteBySlug($id,$slug)
    {
        $this->model->where("parent_id",$id)->where("slug",$slug)->delete();
    }

    public function getNavList()
    {
       
        $html = '';
        $menu0 = $this->model->where("parent_id",0)->orderBy("sort")->get();
        foreach ($menu0 as  $m) {

            $url = ($m->route AND $m->slug) ?  URL::to($m->route.'/'.$m->slug) : '#';
            
            $html.= '<div class="col-sm-3"><h3>'. $m->title.'</h3>';
            $menu1 = $this->model->where("parent_id",$m->id)->orderBy("sort")->get();
            if($menu1)
            {
                $html.="<ul>";
                foreach ($menu1 as $m1) {
                    $url = ($m1->route AND $m1->slug) ?  URL::to($m1->route.'/'.$m1->slug) : '#';
                    $html.= '<li><a href="'.URL::to($url).'">'. $m1->title.'</a></li>';
                }
                $html.="</ul>";
            }
            
            $html.="</div>";
            
        }

        return $html;
    }

    public function getSideNav()
    {
       
        $html = '';
        $menu0 = $this->model->where("parent_id",0)->orderBy("sort")->get();
        foreach ($menu0 as  $m) {

            $url = ($m->route AND $m->slug) ?  URL::to($m->route.'/'.$m->slug) : '#';
            
            $html.= '<li>'. $m->title;
            $menu1 = $this->model->where("parent_id",$m->id)->orderBy("sort")->get();
            if($menu1)
            {
                $html.="<ul>";
                foreach ($menu1 as $m1) {
                    $url = ($m1->route AND $m1->slug) ?  URL::to($m1->route.'/'.$m1->slug) : '#';
                    $html.= '<li><a href="'.URL::to($url).'">'. $m1->title.'</a></li>';
                }
                $html.="</ul>";
            }
            
            $html.="</li>";
            
        }

        return $html;
    }
}