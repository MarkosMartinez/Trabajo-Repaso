<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Formulario;
use App\Models\User;

class DashboardController extends Controller
{
    public function view(Request $request): View
    {
        $formularios = Formulario::all();

    $usuarios = User::select('id', 'name')->get();

    return view('dashboard', [
        'formularios' => $formularios,
        'usuarios' => $usuarios
    ]);
    }
}
