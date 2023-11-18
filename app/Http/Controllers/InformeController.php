<?php

namespace App\Http\Controllers;
use App\Models\Formulario;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class InformeController extends Controller
{
    public function verForm(Request $request, $id = null): View
    {
        if ($id) {
            $user = $request->user();
            $user = User::find($user->id);
            $formulario = Formulario::find($id);
            return view('formInforme', [
                'user' => $user,
                'formulario' => $formulario
            ]);
        } else {
            $user = $request->user();
            $user = User::find($user->id);
            return view('formInforme', [
                'user' => $user
            ]);
        }
    }

    public function eliminarForm(Formulario $formulario)
    {
        $formulario->delete();
        return redirect("/dashboard");
    }


    public function procesarForm(Request $request)
{

    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string',
        'asunto' => 'required|string',
        'contenido' => 'required|string',
    ]);

    // Opcion 1:
    // Crear y almacenar el nuevo formulario
    // $formulario = new Formulario();
    // $formulario->nombre = $request->input('nombre');
    // $formulario->asunto = $request->input('asunto');
    // $formulario->contenido = $request->input('contenido');
    // $formulario->user_id = auth()->user()->id; // Asignar el ID del usuario autenticado como foreign key
    // $formulario->save();

    // Opcion 2:
    // Crear y almacenar el nuevo formulario utilizando el método create
    $formulario = Formulario::create([
        'nombre' => $request->input('nombre'),
        'asunto' => $request->input('asunto'),
        'contenido' => $request->input('contenido'),
        'user_id' => auth()->user()->id
    ]);

    return redirect("/dashboard");
}
}
