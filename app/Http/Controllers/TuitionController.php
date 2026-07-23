<?php

namespace App\Http\Controllers;

use App\Models\Tuition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas = Tuition::all();
        return view('pages.matriculas.index', compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.matriculas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'code' => 'required|string|unique:tuitions,code',
            'nuid'=>'required|string|unique:tuitions,nuid',
            'meter_number' =>'required|string|unique:tuitions,meter_number',
            'rip_status' => 'required|boolean'
        ]);

        $matricula = Tuition::create($data);

        if(!$matricula){
            $mensaje = 'No se pudo crear, vuelve a intentarlo';
            return $mensaje;
        }else{
            return redirect()->route('matricula.index')->with('mensaje','Matricula creada exitosamente');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuition $tuition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuition $tuition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuition $tuition)
    {
        $data = $request->validate([
            'date' => 'sometimes|date',
            'code'=>'sometimes|unique:tuitions,code,'.$tuition->id,
            'nuid' => 'sometimes|unique:tuitions,nuid,'.$tuition->id,
            'meter_number' => 'sometimes|unique:tuitions,meter_number,'.$tuition->id,
            'rip_status' => 'sometimes|boolean'
        ]);

        $matricula = $tuition->update($data);

        if(!$matricula){
            return redirect()->route('matricula.edit', $tuition)->with('mensaje','La matricula no se actualizó');
        }else{
            return redirect()->route('matricula.index')->with('mensaje', 'Matricula actualizada correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuition $tuition)
    {
        $tuition->delete();
    }
}
