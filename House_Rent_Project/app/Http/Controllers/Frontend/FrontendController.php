<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
    public function index(){
        $data = Blog::all()->take(6);
        return view('frontend.pages.index')->with('blogs', $data);
    }
    public function blog_post($id){
        $data=  Blog::where('id',$id)->first();
        return view('frontend.pages.blog_post')->with('blog', $data);
    }
}
