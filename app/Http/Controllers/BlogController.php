<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title='Blog Title';
        $posts=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'));
        // dump(json_decode($posts));
        
        return view('blog',[
            'title' => $title,
            'posts'=>$posts
        ]);
    }
    
}
