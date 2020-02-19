<?php

namespace App\Http\Controllers;
use App\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\Requests\PostFormRequest;


class PostsController extends Controller {
    // Страничка main
    public function index() {
        $posts = Posts::latest('id')->take(4)->get();
        // $posts = DB::table('posts')
        //                     ->latest('id')
        //                     ->take(3)
        //                     ->get();
        return view('main',[
            'posts' => $posts,
        ]);
    }

    // Страницы showPost
    public function show(Posts $id){
        // $post = DB::table('posts')->where('id', $id)->first();
        // $post = Posts::findorfail($id);
        // return $post;
        return view("showPost",[
            'post'=>$id,
        ]);
    }

    // Страница создания
    public function create(){
        return view('createPost');
    }

    // Страница обработчик формы добавления постов
    public function store(){
        $validateData = request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
            'category' => ['required', 'min:3']
        ]);
        // return $validateData;
        Posts::create($validateData);

        // $post = new Posts();
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->сategory = request('category');
        // // $post->likes = 5;
        // $post->save();
        return redirect('/');
    }

    // Страница редактирования постов
    public function edit(Posts $id){
        // $post = Posts::find($id);
        return view('editPost', [
            'post' => $id,
        ]);
    }

    // Обработчик редактирования постов
    public function update(Posts $id){
        request()->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required','string'],
            'category' => ['required','string'],
        ]);
        // $post = Posts::find($id);
        $post = $id;
        $post->title = request('title');
        $post->body = request('body');
        $post->body = request('body');
        $post->сategory = request('category');
        $post->likes = 5;
        $post->save();
        return redirect('/');
    }
}
