<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\equipos;
use App\categorias;

class EquiposController extends Controller{
    
    public function index(Request $request){
        
        $equipos=equipos::paginate();
        return view("admin.equipos.index",compact('equipos'));
    }
  
    public function create(){        
        return view("admin.equipos.create");
    }

  
    public function store(Request $request){
        $equipo    =   new equipos($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
            $ruta=public_path('/img/equipos/'.$nombreurlfoto); 

            Image::make($urlfoto->getRealPath())
                    ->resize(200, null, function ($constraint) 
                        { $constraint->aspectRatio(); })
                    ->save($ruta);

            $equipo->urlfoto  =   $nombreurlfoto;
        endif;        
        $equipo->slug      =   str_slug($request->nombre);
        $equipo->save();
        return redirect()->route('admin.equipos.index');  
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $equipo=equipos::whereId($id)->first();       
        return view("admin.equipos.edit",compact('equipo'));
    }

    public function update(Request $request, $id)
    {       
        $equipo    =   equipos::find($id);          
        $urlfotoanterior        =   $equipo->urlfoto;
        $equipo->fill($request->all());
        
            /////////// TRATAMIENTO IMAGEN
            if ($request->hasFile('urlfoto')){                
                $urlfoto = $request->file('urlfoto');                
                $nombre = str_slug($request->nombre).time().'.'.$urlfoto->guessExtension();
                $ruta=public_path('/img/equipos/'.$nombre);            
                Image::make($urlfoto->getRealPath())
                    ->resize(200, null, function ($constraint) 
                        { $constraint->aspectRatio(); 
                        })
                    ->save($ruta);
                
                $rutaAnterior = public_path("/img/equipos/".$urlfotoanterior);
                if (file_exists($rutaAnterior))
                {
                    unlink (realpath($rutaAnterior));
                }
                $equipo->urlfoto   =   $nombre;
            }
            ///////////// FIN IMAGEN                                  
            $equipo->slug       =   str_slug($request->nombre);
            $equipo->save();
            return redirect()->back()->withSuccessMessage("Se ha actualizado correctamente");
    }

    public function destroy($id)
    {
        $equipo=equipos::findOrFail($id);
        $rutaAnterior = public_path("/img/equipos/".$equipo->urlfoto);
         if (file_exists($rutaAnterior))
            unlink (realpath($rutaAnterior));
        $equipo->delete();
        return redirect()->route('admin.equipos.index');
    }
}
