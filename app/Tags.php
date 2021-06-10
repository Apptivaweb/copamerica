<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = "tags";
    public $timestamps = false;
	protected $fillable =['slug','nombre','descripcion','urlfoto'];

	public function noticias(){
		return $this->belongsToMany('App\Noticias');
	}

	public function scopeSearchTag($query, $nombre){
		return $query->where('slug', '=',$nombre );
	}
}
