<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $fillable = [
        'slug',
        'title',
		'description', 
        'titulo', 
        'descripcion',        
        'urlfoto',
        'urlvideo',
        'link',
        'visitas'
    ];
    public function tags(){
		return $this->belongsToMany('App\Tags');
	}
}
