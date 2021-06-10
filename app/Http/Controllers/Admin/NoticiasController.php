<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\noticias;
use App\categorias;

class NoticiasController extends Controller{
    
    public function index(Request $request){
        
        $noticias=noticias::orderBy("created_at","desc")->paginate();
        return view("admin.noticias.index",compact('noticias'));
    }
  
    public function create(){
        $categorias = categorias::orderBy('nombre','ASC')->pluck('nombre','id');
        return view("admin.noticias.create",compact('categorias'));
    }

  
    public function store(Request $request){
        $noticia    =   new noticias($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto = str_slug($request->titulo).time().'.'.$urlfoto->guessExtension();
            $ruta=public_path('/img/noticias/'.$nombreurlfoto);
            Image::make($urlfoto->getRealPath())
                    ->resize(800, null, function ($constraint) 
                        { $constraint->aspectRatio(); })
                    ->save($ruta);
            $noticia->urlfoto  =   $nombreurlfoto;
        endif;        
        $noticia->slug      =   str_slug($request->titulo);
        $noticia->save();
        return redirect()->route('admin.noticias.index');  
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $noticia=noticias::whereId($id)->first();
        $categorias = categorias::orderBy('nombre','ASC')->pluck('nombre','id');
        return view("admin.noticias.edit",compact('noticia','categorias'));
    }

    public function update(Request $request, $id)
    {       
        $noticia    =   noticias::find($id);          
        $urlfotoanterior        =   $noticia->urlfoto;
        $noticia->fill($request->all());
        
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){                
                $urlfoto = $request->file('urlfoto');                
                $nombre = str_slug($request->titulo).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/noticias/'.$nombre);            
                Image::make($urlfoto->getRealPath())
                    ->resize(800, null, function ($constraint) 
                        { $constraint->aspectRatio(); 
                        })
                    ->save($ruta);
                
                $rutaAnterior = public_path("/img/noticias/".$urlfotoanterior);
                if (file_exists($rutaAnterior))
                {
                    unlink (realpath($rutaAnterior));
                }
                $noticia->urlfoto   =   $nombre;
            }
            ///////////// FIN IMAGEN                                  
            $noticia->slug       =   str_slug($request->titulo);
            $noticia->save();
            return redirect()->back()->withSuccessMessage("Se ha actualizado correctamente");
    }

    public function destroy($id)
    {
        $noticia=noticias::findOrFail($id);
        $rutaAnterior = public_path("/img/noticias/".$noticia->urlfoto);
         if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $noticia->delete();
        return redirect()->route('admin.noticias.index');
    }
}
