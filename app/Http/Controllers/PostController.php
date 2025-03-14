<?php

namespace App\Http\Controllers;
use App\Models\Comment; // Importer le modèle Comment

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function read($id_post)
    {
        $title="Titre de l'article : ";
        $post=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$id_post));
        // $comments=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/comments'));
        $comments= Comment::where('postid',$id_post)->orderByDesc('created_at')->get();
        // dump(json_decode($posts));
        
        return view('post',[
            'titre' => $title,
            'post'=>$post,
            'comments'=>$comments,
        ]);
    }
}
