<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Respuesta;
use App\Http\Controllers\RespuestaController;

class UsuarioController extends Controller
{
    //
    public function index()
    {
        $formularios = Usuario::all();
        return view('welcome');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => ['required', 'regex:/^\d{7,8}$/','unique:usuarios,dni'],
            'email'=>'required|email|unique:usuarios,email',
            'fecha_nacimiento' => 'required|date',
            'educacion_alcanzada' => 'required',
            'edad' => 'required|numeric'
        ]);
        $informacion=Usuario::create($request->all());
        $id=$informacion->id;
        return view('/cuestionario', ['id' => $id]);
    }
    public function show($id) {
        $usuario = Usuario::find($id);
        return view('Cambiar despues', ['usuario' => $usuario]);
    }
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
            'educacion_alcanzada' => 'required',
            'edad' => 'required|numeric'
        ]);

        $usuario->update($request->all());
        return redirect()->route('cuestionario');
    }
}
