<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read($id_user)
    {
        $title="Page de l'auteur : ";
        $user=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users/'.$id_user));
        $posts=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'));
        $galeries=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/albums'));
        // dump(json_decode($posts));
        
        return view('user',[
            'titre' => $title,
            'id_user'=> $id_user,
            'user'=>$user,
            'posts'=>$posts,
            'galeries'=>$galeries,
        ]);
    }
}
