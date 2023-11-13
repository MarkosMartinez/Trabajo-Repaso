<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    public function view(Request $request): View
    {
        $user = $request->user();
        $user = User::find($user->id);
        $last_login = DB::table('users')->select('last_login')->where('id', Auth::user()->id)->first()->last_login;
        return view('dashboard', [
            'user' => $user,
            'last_login' => $last_login,
        ]);
    }
}
