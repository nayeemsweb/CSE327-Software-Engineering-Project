<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();
        return view("admin.pages.blog.list")->with('blogs', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'required',
        ]);
        $fileName = time() . rand() . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $data = $request->all();
        if ($request->hasFile("image")) {
            $request->file('image')->move(public_path("/storage/blog"), $fileName);
            $data['image'] = 'public/storage/blog/'.$fileName;
        }
        $data['description']= str_replace(PHP_EOL,"<br>", $request->description);
        Blog::create($data);
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $contact)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
      $blog=  Blog::where('id',$id)->first();
        if(file_exists($blog->image)){
            @unlink($blog->image);
        }
        $blog->delete();
        return redirect('blog');
    }
}
