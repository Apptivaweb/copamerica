<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hinchas;

class HinchasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $hinchas = hinchas::all();
        return view("admin.hinchas.index", compact('hinchas'));
    }

    public function show($id){
        $hinchas = hinchas::find($id);
        return view('admin.hinchas.show')->with('hinchas', $hinchas);
    }

    public function create(){
        return view('admin.hinchas.create');
    }

    public function store(Request $request){
        try{
            $hincha=new hinchas($request->all());
            if ($request->hasFile('urlfoto')):
                $urlfoto        = $request->file('urlfoto');                
                $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
                $ruta=public_path('/img/hinchas/'.$nombreurlfoto);
                copy($urlfoto->getRealPath(),$ruta);
                $hincha->urlfoto  =   $nombreurlfoto;
            endif;
            if ($request->hasFile('urlfoto2')):
                $urlfoto        = $request->file('urlfoto2');                
                $nombreurlfoto   =  $request->file('urlfoto2')->getClientOriginalName();
                $ruta=public_path('/img/hinchas/'.$nombreurlfoto);
                copy($urlfoto->getRealPath(),$ruta);
                $hincha->urlfoto2  =   $nombreurlfoto;
            endif;
            $hincha->slug        =   str_slug($request->nombre);
            $hincha->save();
            return redirect()->route('admin.hinchas.index');
        }
        catch(Exception $e){
            return "Fatal error".$e->getMessage();
        }
    }

    public function update(Request $request,$id){
        $hinchas =hinchas::findOrFail($id);
        $hinchas->fill($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
            $ruta=public_path('/img/hinchas/'.$nombreurlfoto);
            copy($urlfoto->getRealPath(),$ruta); 
            $rutaAnterior = public_path("/img/hinchas/".$hinchas->urlfoto);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));            
            $hinchas->urlfoto  =   $nombreurlfoto;
        endif;
        if ($request->hasFile('urlfoto2')):
            $urlfoto = $request->file('urlfoto2');
            $nombreurlfoto   =  $request->file('urlfoto2')->getClientOriginalName();
            $ruta=public_path('/img/hinchas/'.$nombreurlfoto);
            copy($urlfoto->getRealPath(),$ruta); 
            $rutaAnterior = public_path("/img/hinchas/".$hinchas->urlfoto2);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));            
            $hinchas->urlfoto2  =   $nombreurlfoto;
        endif;
        $hinchas->slug = str_slug($request->nombre);
        $hinchas->save();
        //Flash::warning("La hincha".$hinchas->nombre.' ha sido editada con éxito');
        return redirect()->route('admin.hinchas.index');
    }

    public function edit($id){        
        $hinchas=hinchas::findOrFail($id);
        return view('admin.hinchas.edit',compact('hinchas'));

    }

    public function destroy($id){
        try{

            $hincha=hinchas::findOrFail($id);
            $rutaAnterior = public_path("/img/hinchas/".$hincha->urlfoto);
            if (file_exists($rutaAnterior))
                unlink (realpath($rutaAnterior));     

            $rutaAnterior = public_path("/img/hinchas/".$hincha->urlfoto2);
            if (file_exists($rutaAnterior))
                unlink (realpath($rutaAnterior));     
            $hincha->delete();
            return redirect()->route('admin.hinchas.index');

        }catch(Exception $e){

            return "FATAL ERROR".$e->getMessage();

        }
    }   
}
