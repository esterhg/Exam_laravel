<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\carreras;
use App\Models\paises;
use App\Models\campus;

class EstudianteController extends Controller
 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = estudiante::all();
        return view ('estudiante.index')->with('estudiante', $estudiantes);
    }

    public function create()
    {
        $carreras = carreras::all(); 
        $campus = campus::all(); 
        $paises = paises::all(); 
        return view('estudiante.create', compact('carreras','campus','paises'));
      
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        estudiante::create($input);
        return redirect('estudiantes')->with('flash_message', 'estudiantes Addedd!');  
    }
    public function show($id)
    {
        $estudiantes= estudiante::find($id);
        return view('estudiante.show')->with('estudiantes', $estudiantes);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiante  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $estudiantes= estudiante::findOrFail($id);
        $carreras = carreras::all(); 
        $campus = campus::all(); 
        $paises = paises::all(); 

        return view('estudiante.edit', compact('estudiantes','carreras','campus','paises'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiante $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
        $dataStudent = request()->except('_token','_method');
        estudiante::where('id','=',$id)->update($dataStudent);

        $student = estudiante::findOrFail($id);

        // return view('examen.edit', compact('student'));
        return redirect('estudiante');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        estudiante::destroy($id);
        return redirect('estudiante');
    }
}
