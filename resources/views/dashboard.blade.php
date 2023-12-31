<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .card{
            margin-top: 20px;
        }
        .card-ultimologueo{
            margin-bottom: 80px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card-ultimologueo">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Logueado correctamente! Ultimo logueo: {{ Auth::user()->last_login ?? 'Nunca'}}
                </div>
            </div>
        </div>

        @foreach($formularios as $formulario)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between">
            <div class="p-6 text-gray-900">
                <h3><b>Nombre:</b> {{ $formulario->nombre }}</h3>
                <p><b>Asunto:</b> {{ $formulario->asunto }}</p>
                <p><b>Contenido:</b> {{ $formulario->contenido }}</p>
                <p><b>Fecha de creacion:</b> {{ $formulario->created_at }}</p>
                @if($formulario->created_at != $formulario->updated_at)
                    <p><b>Fecha de modificacion:</b> {{ $formulario->updated_at }}</p>
                @endif
                <p style="font-size: small;"><b>Usuario Real:</b> {{ $usuarios->where('id', $formulario->user_id)->first()->name }}</p>
            </div>
            <form method="POST" action='/informe/{{ $formulario->id }}'>
            @csrf
            @method('DELETE')
                <!--Imagen de la papelera-->
                <button type="submit" style="margin-top:60px; "><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
            </form>
            <form method="GET" action='/informe/{{ $formulario->id }}'>
            @csrf
                <!--Imagen de editar-->
                <button type="submit" style="margin-top:60px; margin-right:50px"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
            </form>
        </div>

            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
