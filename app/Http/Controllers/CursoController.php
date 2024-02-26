<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Curso::all();
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
        Curso::create($request->all());
        return ['created'];
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Curso::find($id);
       /*  return Curso::find($id); */
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $curso =  Curso::find($id);
        $curso->update($request->all());

        return ['Updated'];
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete($id);

        return ['deleted'];
    }
}
