<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs;
use App\Models\Sliders;
use App\Models\Pages;
use App\Models\Commend;
use App\Models\Category;


class HomeGetController extends Controller
{
    public function index()
    
    {   $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        $categories = Category::all();
        $pages = Pages::all();
        $sliders = Sliders::all();
        $commends = Commend::all();
        return view ("backend.index")->with('sliders', $sliders)->with('pages',$pages)->with('categories', $categories)->with('blogs', $blogs)->with('commends',$commends);
    }

    public function create_commend(Request $request)
    {    
        Commend::create([
            'name_surname' =>$request->name,
            'commend' =>$request->message,
        ]);
      
        return redirect('/anasayfa');
    }

    public function delete_commend(request $request , $id)
    {    
       
   

    }


    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
