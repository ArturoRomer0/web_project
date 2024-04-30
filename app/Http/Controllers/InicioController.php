<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $inicio = Inicio::find(1);
        return view('modulos.Inicio')->with('inicio', $inicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DatosCreate()
    {
        return view('modulos.Mis-Datos');
    }

    public function DatosUpdate(Request $request)
    {
        if (auth()->user()->email != request('email')) {
            $datos = $request();
            if (isset($datos["passwordN"])) {
                $datos =$request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'telefono' => ['string', 'max:255'],
                    'documento' => ['string', 'max:255'],
                    'email' => ['required', 'email', 'string', 'unique:users'],
                    'passwordN' => ['required', 'string', 'min:3'],
                ]);
            } else {
                $datos = $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'telefono' => ['string', 'max:255'],
                    'documento' => ['string', 'max:255'],
                    'email' => ['required', 'email', 'string', 'unique:users'],
                ]);
            }
        } else {
            if (isset($datos["passwordN"])) {
                $datos = $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'telefono' => ['string', 'max:255'],
                    'documento' => ['string', 'max:255'],
                    'email' => ['required', 'email', 'string'],
                    'password' => ['required', 'string', 'min:3'],
                ]);
            } else {
                $datos = $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'telefono' => ['string', 'max:255'],
                    'documento' => ['string', 'max:255'],
                    'email' => ['required', 'email', 'string'],
                ]);
            }
        }

        if (isset($datos["passwordN"])) {
            DB::table('users')->where('id', auth()->user()->id)->update([
                'name' => $datos['name'],
                'email' => $datos["email"],
                'telefono' => $datos["telefono"],
                'documento' => $datos["documento"],
                'password' => Hash::make($datos["passwordN"])
            ]);
        } else {
            DB::table('users')->where('id', auth()->user()->id)->update([
                'name' => $datos['name'],
                'email' => $datos["email"],
                'telefono' => $datos["telefono"],
                'documento' => $datos["documento"]
                // No se actualiza la contraseña si 'passwordN' no está presente
            ]);
        }

        return redirect('Mis-Datos');

        return redirect('Mis-Datos');
    }

    public function edit()
    {
        $inicio = Inicio::find(1);

        return view('modulos.Inicio-Editar')->with('inicio', $inicio);
    }
public function update(Request $request)
{
    $datos = $request->validate([
        'dias' => 'required', // Ajusta las reglas de validación según tus necesidades
        'hora_inicio' => 'required',
        'hora_fin' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
    ]);

    $inicio = Inicio::find(1);
    $inicio->update($datos);

    return redirect('Inicio-Editar');
}

}
