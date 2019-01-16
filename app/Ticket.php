<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // Indicamos cuales son los campos asignables
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
        
        // Indicamos que puede tener muchos comentarios
        public function comments() 
        {
            return $this->hasMany('App\Comment', 'post_id');            
        }
}
