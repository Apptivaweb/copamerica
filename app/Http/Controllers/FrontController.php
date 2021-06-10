<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use App\Noticias;

class FrontController extends Controller
{
    public function index(){
        $noticias=Noticias::orderBy("created_at","desc")->take(4)->get();
        return view('welcome', compact('noticias'));
    } 

    public function equipos(){
        $equipos=Equipos::all();
        return view('equipos', compact('equipos'));
    }
    public function noticias(){
        $noticias=Noticias::orderBy("created_at","desc")->get();
        return view('noticias', compact('noticias'));


    }
    
    public function noticia($noticia){
        $noticia=Noticias::where("slug",$noticia)->first();
        return view('noticia', compact('noticia'));


    }
}
