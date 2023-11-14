<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CrearInformeController extends Controller
{
    public function view(Request $request): View
    {
        $user = $request->user();
        $user = User::find($user->id);
        return view('crearInforme', [
            'user' => $user
        ]);
    }
}
