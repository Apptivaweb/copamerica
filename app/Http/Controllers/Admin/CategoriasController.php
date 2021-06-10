<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\categorias;

class CategoriasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $categorias = categorias::all();
        return view("admin.categorias.index", compact('categorias'));
    }

    public function show($id){
        $categorias = Categorias::find($id);
        return view('admin.categorias.show')->with('categorias', $categorias);
    }

    public function create(){
        return view('admin.categorias.create');
    }

    public function store(Request $request){
        try{
            $categoria=new Categorias($request->all());
            if ($request->hasFile('urlfoto')):
                $urlfoto        = $request->file('urlfoto');                
                $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
                $ruta=public_path('/img/categorias/'.$nombreurlfoto);
                copy($urlfoto->getRealPath(),$ruta);
                $imagen->urlfoto  =   $nombreurlfoto;
            endif;
            $categoria->slug        =   str_slug($request->nombre);
            $categoria->save();
            return redirect()->route('admin.categorias.index');
        }
        catch(Exception $e){
            return "Fatal error".$e->getMessage();
        }
    }

    public function update(Request $request,$id){
        $categorias =Categorias::findOrFail($id);
        $categorias->fill($request->all());
        if ($request->hasFile('urlfoto')):
            $urlfoto = $request->file('urlfoto');
            $nombreurlfoto   =  $request->file('urlfoto')->getClientOriginalName();
            $ruta=public_path('/img/categorias/'.$nombreurlfoto);
            copy($urlfoto->getRealPath(),$ruta); 
            $rutaAnterior = public_path("/img/categorias/".$categorias->urlfoto);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));            
            $categorias->urlfoto  =   $nombreurlfoto;
        endif;
        $categorias->slug = str_slug($request->nombre);
        $categorias->save();
        //Flash::warning("La categoria".$categorias->nombre.' ha sido editada con éxito');
        return redirect()->route('admin.categorias.index');
    }

    public function edit($id){        
        $categorias=Categorias::findOrFail($id);
        return view('admin.categorias.edit',compact('categorias'));

    }

    public function destroy($id){
        try{

            $categoria=Categorias::findOrFail($id);
            $rutaAnterior = public_path("/img/categorias/".$categoria->urlfoto);
            if (file_exists($rutaAnterior))
                 unlink (realpath($rutaAnterior));     
            $categoria->delete();
            return redirect()->route('admin.categorias.index');

        }catch(Exception $e){

            return "FATAL ERROR".$e->getMessage();

        }
    }   
}