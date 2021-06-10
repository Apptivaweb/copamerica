<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\predicciones;
use App\equipos;

class PrediccionesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $predicciones = predicciones::all();
        return view("admin.predicciones.index", compact('predicciones'));
    }

    public function show($id){
        $predicciones = predicciones::find($id);
        return view('admin.predicciones.show')->with('predicciones', $predicciones);
    }

    public function create(){        
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.predicciones.create',compact("equipos"));
    }

    public function store(Request $request){
        try{
            $prediccion=new predicciones($request->all());                       
            $prediccion->save();
            return redirect()->route('admin.predicciones.index');
        }
        catch(Exception $e){
            return "Fatal error".$e->getMessage();
        }
    }

    public function update(Request $request,$id){
        $predicciones =predicciones::findOrFail($id);
        $predicciones->fill($request->all());
        $predicciones->save();
        //Flash::warning("La prediccion".$predicciones->nombre.' ha sido editada con éxito');
        return redirect()->route('admin.predicciones.index');
    }

    public function edit($id){        
        $prediccion=predicciones::findOrFail($id);
        $equipos = equipos::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.predicciones.edit',compact('prediccion', "equipos"));

    }

    public function destroy($id){
        try{

            $prediccion=predicciones::findOrFail($id);            
            $prediccion->delete();
            return redirect()->route('admin.predicciones.index');

        }catch(Exception $e){

            return "FATAL ERROR".$e->getMessage();

        }
    }   
}