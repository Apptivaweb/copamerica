<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinchasgenerados extends Model
{
    protected $fillable = [
        'slug',
        'nombre', 
        'frase',
        'urlfoto',                
        'visitas',
        'hinchas_id'
    ];
    public function hinchas(){
		return $this->belongsTo('App\Hinchas');		
	}
}
