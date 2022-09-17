<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;//ekleyeceğiiz resimlerin optimize olmasını sağlayan bir kütüphane

class BlogController extends Controller
{
    public function getBlogs()
    {   $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        return view ("backend.blog.blogs")->with('blogs', $blogs);
    }

    public function getBlogsAdd()
    {   $categories = Category::all();
        return view ("backend.blog.blog-add")->with('categories' , $categories);
    }

    public function getBlogsEdit($blogId)    
    {   
        $categories = Category::all();
        $blog = Blogs::where('id' , $blogId)->first();
        return view ("backend.blog.blog-edit")->with('categories' , $categories)->with('blog', $blog);
    }




    public function postBlogs(Request $request)
    {
        if(isset($request->delete)){
            try {
                
                Blogs::where('id', $request->id)->delete();
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Silindi']);
            } catch (\Exception $e) {
              
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Silinemedi']);
            }
        }

        elseif(isset($request->blog_status)){
            try {
                Blogs::where('id', $request->id)->update($request->all());
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Durumu Değiştirildi']);
            } catch (\Exception $e) {
                
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Durumu Değiştirilemedi']);
            }
        }
    }

    public function postBlogsAdd(Request $request)
    {    
        
        try {
         
        $date = Str::slug(Carbon::now());
     
        $slug = Str::slug($request->blog_title) . '-' . $date;

        //save(public_path('/uploads/pages/')  ile public in içindeki verdiğimiz dizine kaydediyoruz
        //$imageName ile aldığımız resimi jpg formatına çevirip encode ile kalitesini belirliyoruz.
        //save fonksiyonu interventşon kütüphanesinin bi fonksiyonu
        Image::make($request->file('image'))->save(public_path('/uploads/blogs') .  $slug . '.jpg')->encode('jpg','50');
        
        //merge ederek veritabanımıza image'in adını ve durumunu ekliyoruz.
        $request->merge(['blog_image' => '/uploads/blogs'. $slug.'.jpg']);
        $request->merge(['blog_status' => $request->blog_status == 'on' ? 'on' : 'off']);
        $request->merge(['blog_author' => Auth::user()->id]);
        $request->merge(['blog_slug' =>  $slug]);
        Blogs::create($request->all());
        return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Eklendi']);
    } catch (\Exception $e) {
  
        return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Eklenemedi']);
    }

    }


    public function postBlogsEdit(Request $request , $blogId)
    {
        try {
            $blogs =  Blogs::where('id',$blogId)->first();
             $date = Str::slug(Carbon::now());
             $slug = Str::slug($request->blog_title) . '-' . $date;
            if ($request->hasFile('blog_image')){
                File::delete(public_path($blogs->blog_image));

                Image::make($request->file('blog_image'))->save(public_path('/uploads/blogs/') . $slug . '.jpg')->encode('jpg','50');
            }

            Blogs::where('id',$blogId)->update([
                
                'blog_title' => $request-> blog_title ,
                'blog_description'=> $request-> blog_description ,
                'blog_tags' => $request-> blog_tags,
                'blog_content'=> $request-> blog_content ,
                'blog_image' => $request->hasFile('blog_image') ? '/uploads/blogs/' . $slug . '.jpg' : $blogs->blog_image,
                'blog_author'=> Auth::user()->id,
                'blog_slug'=> $slug,
                'blog_categoryId'=> $request-> blog_categoryId ,
                'blog_status' => $request->blog_status == 'on' ? 'on' : 'off',
            ]);

            // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Sayfa Güncellendi ']);
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Haber Güncellendi']);

        } catch (\Exception $e) {
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Haber Güncellenemedi']);
        }
    }




    public function getBlogsCategory()
    {
        $categories = Category::all();
        return view ("backend.blog.blog-category")->with('categories', $categories);
    }

    public function getBlogsCategoryAdd()
    {
        $categories = Category::all();
        return view ("backend.blog.blog-category-add")->with('categories', $categories);
    }

    public function getBlogsCategoryEdit(Request $request, $categoryId)
    {  
        $categories = Category::all();
        $category = Category::where('id' , $categoryId)->first();
        return view ("backend.blog.blog-category-edit")->with('categories', $categories)->with('category', $category);
    }


    public function postBlogsCategory(Request $request)
    {
        if(isset($request->delete)){
            try {
                
            Category::where('id', $request->id)->delete();
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Silindi']);
            } catch (\Exception $e) {
              
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Silinemedi']);
            }
        }

        elseif(isset($request->category_status)){
            try {
                Category::where('id', $request->id)->update($request->all());
                return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Durumu Değiştirildi']);
            } catch (\Exception $e) {
                
                return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Durumu Değiştirilemedi']);
            }
        }
    }

    public function postBlogsCategoryAdd(Request $request)
    {
        try {
            
            $slug = Str::slug($request->category_name, '-');
            $request->merge(['category_slug' => $slug]);
            $request->merge(['category_status' => $request->category_status == 'on' ? 'on' : 'off']);
            Category::create($request->all());
           // return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Menü Eklendi']);
           return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Eklendi']);
        } catch (\Exception $e) {
           
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Eklenemedi']);
        }
    }

    public function postBlogsCategoryEdit(Request $request, $categoryId)
    {
        try {
            $slug = Str::slug($request->category_name, '-');
            $request->merge(['category_slug' => $slug]);
            $request->merge(['category_status' => $request->category_status == 'on' ? 'on' : 'off']);
            Category::where('id', $categoryId)->update($request->except(['_token']));
            return response(['status' => 'success', 'title' => 'Başarılı', 'content' => 'Kategori Güncellendi']);
        } catch (\Exception $e) {
            echo $e;
            return response(['status' => 'error', 'title' => 'Başarısız', 'content' => 'Kategori Güncellenemedi']);
        }
    }
    

} 