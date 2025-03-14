<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog/{id_post}',[PostController::class,'read'])->name('post');
// ajouter une route vers l'info de l'auteur 
Route::get('/blog/user/{id_user}',[UserController::class,'read'])->name('user');
// ajouter une route vers les commentaires de l'article 
Route::get('/blog/galerie/{id_galerie}/photos',[GalerieController::class,'read'])->name('galerie');

Route::post('/comment',[CommentController::class,'create'])->name('comment');
Route::delete('/delete/{id_comment}',[CommentController::class,'delete'])->name('delete');
