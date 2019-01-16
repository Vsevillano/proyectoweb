<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Le decimos a Eloquent que Este modelo pertenece a Ticket
    // Indicamos los campos que no pueden ser asignados
    protected $guarded = ['id'];

    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }
}
