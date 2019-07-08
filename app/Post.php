<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    // Primary key
    public $primaryKey = 'id';
    
    // Timestamps
    public $timestamps = true;

    public function user(){  //Relaciona o post com o usuário
        return $this->belongsTo('App\User');
    }

    /*public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }*/

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
