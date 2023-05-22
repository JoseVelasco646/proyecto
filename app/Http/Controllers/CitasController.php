<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\CitasConfirmarMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin;


class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente_id=session('LoggedUser');
        $citas = Cita::where('cliente_id',$cliente_id)->get();
        return view('layout.citas_inicio')->with(compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.citas_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente_id = session('LoggedUser');
        $cita = new Cita();
        $cita->cliente_id = $cliente_id;
        $cita->mascota = $request->mascota;
        $cita->dia = $request->dia;
        $cita->hora = $request->hora;
        $cita->opciones = $request->opciones;

        $cita->save();
        $details = [
            'mascota' =>$request->mascota,
            'dia' =>$request->dia,
            'hora' =>$request->hora,
            'opciones' =>$request->opciones

        ];
        $correo= Admin::find(session('LoggedUser'));
        $correo = $correo->email;
        Mail::to($correo)->send(new CitasConfirmarMail($details));
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        return view('layout.citas_editar')->with(compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $cita->fill($request->input())->saveOrFail();
        return redirect() ->route("citas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route("citas.index");
    }
}
