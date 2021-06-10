<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Peru extends Model
{
    use SyncsWithFirebase;
    protected $fillable = [
        'slug',
        'mtitulo',
		'mdescripcion',
        'titulo', 
        'descripcion',
        'urlfoto',
        'urlvideo',
        'link',
        'visitas'
    ];

}
