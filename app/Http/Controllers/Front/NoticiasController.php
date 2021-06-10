<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\noticias;

class NoticiasController extends Controller
{
    
    public function index()
    {
        $noticias= noticias::orderBy("created_at")->get();
        return view("front.noticias.index",compact("noticias"));
    }

    
}
