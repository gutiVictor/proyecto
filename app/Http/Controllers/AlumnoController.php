<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
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

        Alumno::create($request->all());
        return ['created'];
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Alumno::find($id);
        return Alumno::find($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $alumno = Alumno::find($id);
    return view('alumnos.edit', compact('alumno'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno=Alumno::find($request->id);
        $alumno->update($request->all());
        return ['updated'];

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno=Alumno::find($id);
        $alumno->delete();
        return ['deleted'];
        //
    }
}
