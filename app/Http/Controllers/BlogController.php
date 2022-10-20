<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use Illuminate\Http\Request;
use App\Models\Category;
class BlogController extends Controller
{
    public function index(){
        $blogs=blogs::with('category')->get();
        return view('blogs', [
            'blogs'=> $blogs
            ]);
    }
    public function create(){
        $categories = category::all();
        return view('create-blogs', [
            'categories' => $categories
            ]);
    }
    public function store(Request $request) {
        if($request->hasFile('image'));
        $blog = new blogs();
        $blog->title = $request->get('title');
        $blog->description = $request->get('description');
        $blog->category_id = $request->get('category_id');
        $url = $request->file('image')->store('images');
        $blog->image = $url;

        $blog->save();
        return redirect('/')->with('status', 'Данные успешно сохранены');
    }
    public function blog(blogs $blog){
        return view ('blog',[
            'blog' => $blog
        ]);
}
    public function edit(blogs $blog){
        $categories = category::all();
        return view ('edit-blog',[
            'blog' => $blog,
            'categories'=>$categories
        ]);
    }
    public function editSave(blogs $blog, Request $request) {
        if($request->hasFile('image'));
        $blog->title = $request->get('title');
        $blog->description = $request->get('description');
        $blog->category_id = $request->get('category_id');
        $url = $request->file('image')->store('images');
        $blog->image = $url;

        $blog->save();
        return redirect('/')->with('status', 'Данные успешно сохранены');
    }
    public function delete(blogs $blog){
        $blog->delete();
        return redirect('/')->with ('status', 'Данные успешно удалены');

}
}
