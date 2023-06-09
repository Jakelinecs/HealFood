<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        Contacto::create($validatedData);

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }}
