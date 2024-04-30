<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        if(auth()->user()->rol == "Doctor" && $id != auth()->user()->id){

            return redirect('Inicio');
        }

        $horarios = DB::select('select * from horarios where id_doctor = '.$id);

        $pacientes = Pacientes::all();

        return view('modulos.Citas', compact('horarios','pacientes'));
    }

    public function HorarioDoctor(Request $request)
    {
        $datos = request();

        DB::table('horarios')->insert([
            'id_doctor' => auth()->user()->id,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin
        ]);
        return redirect('Citas/'.auth()->user()->id);
    }

    public function editarHorario(Request $request)
    {
        $datos = request();

        DB::table('horarios')->where('id', $datos['id'])->update(['hora_inicio'=>$datos["hora_inicioE"
        ], 'hora_fin'=>$datos["hora_finE"] ]);

        return redirect('Citas/'.auth()->user()->id);
    }




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $citas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
    }
}
