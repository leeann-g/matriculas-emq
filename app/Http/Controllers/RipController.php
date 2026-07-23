<?php

namespace App\Http\Controllers;

use App\Models\Rip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roturas = Rip::all();
        return view('pages.roturas.index', compact('roturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.roturas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tuition_id'=>'required|exists:tuitions,id',
            'payment'=>'required|in:financiado,cancelado',
            'amount'=>'required|string',
            'payment_date'=>'required|date'
        ]);
        
        Rip::create($data);
        
        return redirect()->route('rotura.index')->with('mensaje', 'Creado Exitosamente');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Rip $rip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rip $rip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rip $rip)
    {
        $data = $request->validate([
            'payment' => 'sometimes|in:financiado,cancelado',
            'amount' => 'sometimes|string',
            'payment_date'=>'sometimes|date'
        ]);

        if(!$rip->update($data)){
            return redirect()->route('rotura.edit',$rip)->with('mensaje','Rotura no se pudo actualizar');
        }
            
        return redirect()->route('rotura.index')->with('mensaje','Rotura actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rip $rip)
    {
        $rip->delete();
        return redirect()->route('rotura.index')->with('mensaje','Eliminado correctamente');
    }
}
