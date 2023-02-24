<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Reserva;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {            
        $users = DB::table('reservas')
        ->join('users', 'reservas.id_usuario', '=', 'users.id')
        ->join('clases', 'reservas.id_clase', '=', 'clases.id_clase')
        ->orderByDesc('id_reserva')
        ->get();

        return view('reservas', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $clases = Clase::all();
        return view ('reservas.create', compact (['users','clases']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva=new Reserva();
        $reserva=$this->createUpdateClases($request, $reserva);
        return redirect()
        ->route('reserva')
        ->with('success','Reserva creada correctamente');
    }

    public function createUpdateClases(Request $request,$reserva)
    {
        $reserva->id_usuario=$request->id_usuario;
        $reserva->id_clase=$request->id_clase;
        
        $reserva->save();
        return $reserva;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::where('id_reserva',$id)->firstOrFail();
        $users = User::all();
        $clases = Clase::all();
        return view('reservas.edit', compact(['reserva','users','clases']));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $reserva=Reserva::where('id_reserva',$id)->firstOrfail();
            $reserva=$this->createUpdateClases($request, $reserva);
            return redirect()
            ->route('reserva')
            ->with('success','Reserva Actualizada Satisfactoriamente.');
        }catch(Exception $e){
            return $e->getMessage();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $reserva=Reserva::findOrfail($id);
            $reserva->delete();
            return redirect()
            ->route('reserva')
            ->with('success','Registro Eliminado.');
        }catch(Exception $e){
            return redirect()
            ->route('reserva')
            ->with('success','El Registro No Puede Ser Eliminado.'.$e);
        }
    }
}
