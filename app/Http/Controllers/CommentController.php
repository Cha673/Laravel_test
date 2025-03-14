<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        // Récupérer les données validées
        $comment= new Comment();
        $comment -> lastname = $request->input('lastname');
        $comment -> postid = $request->input('id_post');
        $comment -> firstname = $request->input('firstname');
        $comment -> email = $request->input('email');
        $comment -> comments = $request->input('comments');

        $comment->save();

        // Rediriger l'utilisateur après le traitement
        return redirect()->route('post',$request->input('id_post'))->with('success','Commentaire ajouté avec succès');
    }

    public function delete(Request $request,$id_comment)
    {
        // Récupérer les données validées
        $comment = Comment::findOrFail($id_comment);

        //récupérer l'id du post pour rediriger l'utilisateur après la suppression du commentaire
        $id_post=$comment->postid;

        //Supprimer le commentaire
        $comment->delete();

        // Rediriger l'utilisateur après le traitement
        return redirect()->route('post',$id_post)->with('success','Commentaire supprimé avec succès');
    }

    public function edit($id_comment)
    {
        // Récupérer le commentaire par son ID
        $comment = Comment::findOrFail($id_comment);

        // Retourner la vue avec le commentaire
        return view('comment_update', compact('comment'));
    }


    public function update(Request $request,$id_comment)
    {
        // Récupérer les données validées
        $comment = Comment::findOrFail($id_comment);
        $comment -> lastname = $request->input('lastname');
        $comment -> firstname = $request->input('firstname');
        $comment -> email = $request->input('email');
        $comment -> comments = $request->input('comments');

        $comment->save();

        // Rediriger l'utilisateur après le traitement
        return redirect()->route('post',$comment->postid)->with('success','Commentaire modifié avec succès');
    }
}
