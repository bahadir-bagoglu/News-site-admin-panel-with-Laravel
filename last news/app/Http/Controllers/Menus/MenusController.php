<?php

namespace App\Http\Controllers\Menus;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function getMenus()
    {
        $menus = Menu::where('up_menu', '0')->orderBy('list', 'asc')->get();
        return view('backend.menus.menus')->with('menus', $menus);
    }

    public function getMenusAdd()
    {
        $pages = Pages::all();
        $menus = Menu::all();
        return view('backend.menus.menu-add')->with('menus', $menus)->with('pages', $pages);
    }

    public function getMenusEdit($menuId)
    {
        $pages = Pages::all();
        $menus = Menu::all();
        $menu = Menu::where('id', $menuId)->first();
        return view('backend.menus.menu-edit')->with('menus', $menus)->with('menu', $menu)->with('pages', $pages);
    }

   public function postMenus(Request $request)
    {
        if (isset($request->item)){
            try {
                foreach ($_POST['item'] as $key => $value) {
                    $menus = Menu::find(intval($value));
                    $menus->list = intval($key);
                    $menus->save();
                }
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Sırası Değiştirildi']);
            } catch (\Exception $e) {
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Sırası Değiştirilemedi']);
            }
        }

        elseif(isset($request->delete)){
            try {
                
                Menu::where('id', $request->id)->delete();
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Silindi']);
            } catch (\Exception $e) {
              
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Silinemedi']);
            }
        }

        elseif(isset($request->menu_status)){
            try {
                Menu::where('id', $request->id)->update($request->all());
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Durumu Değiştirildi']);
            } catch (\Exception $e) {
                
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Durumu Değiştirilemedi']);
            }
        }

    }

    public function postMenusAdd(Request $request)
    {
        try {
            
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug' => $slug]);
            $request->merge(['menu_status' => $request->menu_status == 'on' ? 'on' : 'off']);
            Menu::create($request->all());
           // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menü Eklendi']);
           return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Eklendi']);
        } catch (\Exception $e) {
           
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Eklenemedi']);
        }
    }

    public function postMenusEdit(Request $request, $menuId)
    {
        try {
            $slug = Str::slug($request->menu_name, '-');
            $request->merge(['menu_slug' => $slug]);
            $request->merge(['menu_status' => $request->menu_status == 'on' ? 'on' : 'off']);
            Menu::where('id', $menuId)->update($request->except(['_token']));
            // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menü Güncellendi']);
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Güncellendi']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Güncellenemedi']);
        }
    }

    

}
