<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clases = Clase::all();
        return view ('clases', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clase=new Clase();
        $clase=$this->createUpdateClases($request, $clase);
        return redirect()
        ->route('clase')
        ->with('success','Clase creada correctamente');
    }
    public function createUpdateClases(Request $request,$clase)
    {
        $clase->nombreClase=$request->nombreClase;
        $clase->cupo=$request->cupo;
        $clase->fecha=$request->fecha;
        $clase->comienza=$request->comienza;
        $clase->termina=$request->termina;
        $clase->descripcion=$request->descripcion;
        if($request->hasfile('imagen'))
        {$clase->imagen=$request->file('imagen')->store('portafolio','public');}
        $clase->save();
        return $clase;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(Clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clase=Clase::where('id_clase',$id)->firstOrfail();
        return view('clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clase=Clase::where('id_clase',$id)->firstOrfail();
        Storage::delete('public/'.$clase->imagen);
        $clase=$this->createUpdateClases($request, $clase);
        return redirect()
        ->route('clase')
        ->with('success','Registro Actualizado Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        try{
            $clase=Clase::findOrfail($id);
            Storage::delete('public/'.$clase->imagen);
            $clase->delete();
            return redirect()
            ->route('clase')
            ->with('success','Registro Eliminado.');
        }catch(Exception $e){
            return redirect()
            ->route('clase')
            ->with('success','El Registro No Puede Ser Eliminado.'.$e);
        }
    } 
}
