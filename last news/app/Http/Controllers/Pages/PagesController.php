<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;//resimlerle ilgili kütüphane, resimleri optimize etmemize yarar.



class PagesController extends Controller

{
    public function getPages()
    {   $pages = Pages::all();
        return view('backend.pages.pages')->with('pages',$pages);
    }

    public function getPageAdd()
    {
        return view ("backend.pages.page-add");
    }

    public function getPageedit($pageId)
    {   $pages = Pages::where('id' , $pageId)->first();
        return view ("backend.pages.page-edit")->with('pages',$pages);
    }



    public function postPages(Request $request)
    {
        if(isset($request->delete)){
            try {
                Pages::where('id', $request->id)->delete();
                if (isset($request->page_image)){
                    File::delete(public_path($request->page_image));
                }
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Silindi']);
            } catch (\Exception $e) {
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Silinemedi']);
            }
        }

        elseif(isset($request->page_status)){
            try {
                Pages::where('id', $request->id)->update($request->all());
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Durumu Değiştirildi']);
            } catch (\Exception $e) {
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Durumu Değiştirilemedi']);
            }
        }
    }

    public function postPagesAdd(Request $request){
        try {
         
            $date = Str::slug(Carbon::now());
         
            $imageName = Str::slug($request->page_name) . '-' . $date;
   
            //save(public_path('/uploads/pages/')  ile public in içindeki verdiğimiz dizine kaydediyoruz
            //$imageName ile aldığımız resimi jpg formatına çevirip encode ile kalitesini belirliyoruz.
            //save fonksiyonu interventşon kütüphanesinin bi fonksiyonu
            Image::make($request->file('image'))->save(public_path('/uploads/pages') . $imageName . '.jpg')->encode('jpg','50');
            
            //merge ederek veritabanımıza image'in adını ve durumunu ekliyoruz.
            $request->merge(['page_image' => '/uploads/pages/'.$imageName.'.jpg']);
            $request->merge(['page_status' => $request->page_status == 'on' ? 'on' : 'off']);
            Pages::create($request->all());
            // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Sayfa Eklendi']);
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Eklendi']);

        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Eklenemedi']);
        }
    }

    

    public function postPagesEdit(Request $request, $pageId){
        try {
            $pages =  Pages::where('id',$pageId)->first();
            if ($request->hasFile('page_image')){
                File::delete(public_path($pages->page_image));
                $date = Str::slug(Carbon::now());
                $imageName = Str::slug($request->page_name) . '-' . $date;
                Image::make($request->file('page_image'))->save(public_path('/uploads/pages/') . $imageName . '.jpg')->encode('jpg','50');
            }

            Pages::where('id',$pageId)->update([
                'page_name' => $request->page_name,
                'page_description'=> $request->page_description,
                'page_tags'=> $request->page_tags,
                'page_content'=> $request->page_content,
                'page_image'=> $request->hasFile('page_image') ? '/uploads/pages/' . $imageName . '.jpg' : $pages->page_image,
                'page_status'=> $request->page_status == 'on' ? 'on' : 'off',
            ]);

            // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Sayfa Güncellendi ']);
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Güncellendi']);

        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Güncellenemedi']);
        }
    }
}
    







