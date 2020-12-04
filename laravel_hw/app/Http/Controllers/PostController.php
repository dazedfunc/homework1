<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts')->with('posts', $posts); #$posts ighebs mnishvnelobas Post:all-dan, xolo 'posts'-s vwert viewshi
//        return $posts;
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('post')->with('post', $post);
//        return $post;
    }
    public function create(){
//        return 'test';
        return view('create');
    }
    public function save(Request $request){
        $post = new Post($request->all());
        $post->save();
        return redirect()->back();
//        return $request->post_text;
//        return 'test';
    }
    public function edit($postId){
        $post = Post::findOrFail($postId);
        return view('edit')->with('post', $post);
    }
    public function update(Request $request, $postId){
        $post = Post::findOrFail($postId);
        $post->update($request->all());
    }
    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
}
