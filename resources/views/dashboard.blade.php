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
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h3><b>Nombre:</b> {{ $formulario->nombre }}</h3>
                            <p><b>Asunto:</b> {{ $formulario->asunto }}</p>
                            <p><b>Contenido:</b> {{ $formulario->contenido }}</p>
                            <p><b>Contenido:</b> {{ $formulario->contenido }}</p>
                            <p style="font-size: small;"><b>Usuario Real:</b> {{ $usuarios->where('id', $formulario->user_id)->first()->name }}</p>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
