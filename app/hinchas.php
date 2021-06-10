<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinchas extends Model
{
    protected $table = "hinchas";
	protected $fillable =[        
        'slug',
        'title',        
        'description',
        'nombre',
        'descripcion',
        'urlfoto',
        'urlfoto2',
        'orden',
        'visitas'];
        public function hinchasgenerados(){
            return $this->hasMany('App\Hinchasgenerados');
        }
}
