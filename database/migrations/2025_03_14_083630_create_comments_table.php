<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->integer('postid'); // ID_post
            $table->string('lastname'); // Nom
            $table->string('firstname'); // Prénom
            $table->string('email'); // Email
            $table->text('comments'); // Commentaire
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
