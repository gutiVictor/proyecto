<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Importa la clase Validator desde el namespace correcto
use PhpParser\Node\Stmt\TryCatch;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
             
            $validacion = Validator::make($request->all(), [
                'alumno_id'=>'required|max:10', 
                'tipo_asistencia_id'=>'required|max:3', 
            ]);
    
            if ($validacion->fails()){
                return response()->json(['message'=>'faltan Datos en el Formulario'],400);
            }
    
            $nuevaAsistencia = Asistencia::create([
                'alumno_id'=>$request->alumno_id,
                'tipo_asistencia_id'=>$request->tipo_asistencia_id,
    
            ]); 
    
            return response()->json($nuevaAsistencia,201);

        } catch (Exception $e) {
            return response()->json(['Ha ocurrido un error'],500);
        }
       
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
