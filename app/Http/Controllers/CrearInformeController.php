<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CrearInformeController extends Controller
{
    public function verForm(Request $request): View
    {
        $user = $request->user();
        $user = User::find($user->id);
        return view('crearInforme', [
            'user' => $user
        ]);
    }

    public function procesarForm(Request $request)
{
    $user = $request->user();
    $user = User::find($user->id);
}
}
