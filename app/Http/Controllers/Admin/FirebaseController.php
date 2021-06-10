<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Peru;


class FirebaseController extends Controller
{
    public function index(){
        $peru=Peru::all();
        return view("admin.peru.index",compact("peru"));      

    }
    public function create(){
        return view("admin.peru.create"); 
    }
    public function edit($id){
        $peru=Peru::whereId($id)->first();        
        return view("admin.peru.edit",compact('peru'));
    }
    public function store(Request $request){
        $peru=new Peru($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto = str_slug($request->titulo).time().'.'.$urlfoto->guessExtension();
            $ruta=public_path('/img/noticias/'.$nombreurlfoto);
            Image::make($urlfoto->getRealPath())
                ->fit(600,300,function ($constraint) {
                    $constraint->upsize();
                })
                ->save($ruta);
            $peru->urlfoto  =   $nombreurlfoto;
        endif;
        $peru->slug         =   str_slug($request->titulo);
        $peru->visitas      =   1;
        $peru->save();
        return redirect()->route('admin.peru.index');
    }
    public function update(Request $request, $id)
    {       
        $peru               =   Peru::find($id);          
        $urlfotoanterior    =   $peru->urlfoto;
        $peru->fill($request->all());
        
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){                
                $urlfoto = $request->file('urlfoto');                
                $nombre = str_slug($request->titulo).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/noticias/'.$nombre);
                Image::make($urlfoto->getRealPath())
                ->fit(600,300,function ($constraint) {
                    $constraint->upsize();
                })
                ->save($ruta);
                
                $rutaAnterior = public_path("/img/noticias/".$urlfotoanterior);
                if (file_exists($rutaAnterior)){
                    unlink (realpath($rutaAnterior));
                }
                $peru->urlfoto   =   $nombre;
            }
            ///////////// FIN IMAGEN                                  
            $peru->slug       =   str_slug($request->titulo);
            $peru->save();
            return redirect()->back()->withSuccessMessage("Se ha actualizado correctamente");
    }

    public function destroy($id){

    }
    
}
