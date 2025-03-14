<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Attributs pouvant être remplis
    protected $fillable = [
        'id_post',
        'lastname',
        'firstname',
        'email',
        'comments',
    ];
}