<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    //
    public function index(Request $request)
    {
        $preguntas_todas = Pregunta::all();
        return view('/preguntasa', ['preguntas' => $preguntas_todas]);
    }

    public function preguntasPorArea(Request $request, $id_area)
    {
        $preguntas_encontradas = Pregunta::where('area', $id_area)->get();
        return response()->json(['preguntas' => $preguntas_encontradas]);
    }
}
