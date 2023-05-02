<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\RespuestaShipped;


class RespuestaController extends Controller
{
    //
    public function store (Request $request){
        $request_validada = $request->validate([
            'respuesta'=> 'required',
            'idUsuario'=> 'required'
        ]);

        $respuestas_a_guardar= $request->get('respuesta');
        $idUsuario_a_guardar= $request->get('idUsuario');
         // Store a value in the session
       
        $user = Usuario::findOrFail($idUsuario_a_guardar);

        $answer = new Respuesta([
            'respuesta' => $respuestas_a_guardar
        ]);

        $user->respuestas()->save($answer);
        
        Mail::to($user->email)->queue(new RespuestaShipped($respuestas_a_guardar));

        return redirect('https://ac7c-186-143-138-210.ngrok-free.app/conclusion');
    }
}
