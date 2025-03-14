<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
    public function read($id_galerie)
    {
        $title="Titre de l'article : ";
        $photos=json_decode(file_get_contents('https://jsonplaceholder.typicode.com/photos/'));
        // dump(json_decode($posts));
        
        return view('galerie',[
            'titre' => $title,
            'photos'=>$photos,
            'id_galerie'=>$id_galerie,
        ]);
    }
}
