<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'Posts' => Post::all(),
        ];
        return view('Post.index', $data);
    }

    public function create()
    {
        $data = [
            'categories'=> Category::all(),
        ];
        return view('Post.create', $data);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')){
            $path = $request->File('thumbnail')->store('thumbnail');
        }else{
            $path ="https://via.placeholder.com/150x150";
        }

        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $user_id = Auth()->User()->id;
        $detail = $request->input('detail');

        $Post = new Post();
        $Post->title = $title;
        $Post->thumbnail = $path;
        $Post->category_id = $category_id;
        $Post->user_id = $user_id;
        $Post->detail = $detail;
        $Post->save();

        return redirect('/Post');
    }

    public function edit($id)
    {
        $Post = Post::find($id);
        $data = [
            'Post' => $Post
        ];
        return view('Post.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $Postname = $request->input('Postname');
        $email = $request->input('email');
        $password = $request->input('password');

        $Post = Post::find($id);
        $Post->name = $name;
        $Post->Postname = $Postname;
        $Post->email = $email;
        $Post->password = Hash::make($password);
        $Post->save();

        return redirect('/Post');
    }

    public function delete($id)
    {
        $Post = Post::find($id);
        $Post->delete();
        return redirect('/Post');
    }

}
