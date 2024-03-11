<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitado;

class InvitadoController extends Controller
{
    public function confirmarAsistencia(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        
        ]);

        Invitado::create([
            'nombre' => $request->nombre,
            
        ]);

        return redirect()->back()->with('message', '¡Gracias por confirmar tu asistencia!');
    }
}
