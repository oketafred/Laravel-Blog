<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function getSingle($slug){

        //$post = Post::where('slug', '=', $slug)->first();
        $post = Post::whereSlug($slug)->first();


        return view('blog.single', compact('post'));


    }

    public function getIndex(){

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('blog.index', compact('posts'));

    }

}
