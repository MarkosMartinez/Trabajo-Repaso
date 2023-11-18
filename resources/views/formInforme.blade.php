<x-app-layout> <x-slot name="header"> <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Crear Informe') }}
    </h2>
    </x-slot>
    <div class="py-12">
        
<style>
    .form {
        max-width: 400px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        font-size: 1.2rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #007bff;
        border: 1px solid #007bff;
        padding: 0.75rem 1.5rem;
        font-size: 1.2rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

</style>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('informe') }}" method="post" class="p-3 form">
                        @csrf
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre de usuario</label>
                            <input type="text" id="nombre" name="nombre" value="{{ isset($formulario) ? $formulario->nombre : $user->name }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" id="asunto" name="asunto" value="{{ isset($formulario) ? $formulario->asunto : '' }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="form-label">Contenido</label>
                            <textarea id="contenido" name="contenido" class="form-control">{{ isset($formulario) ? $formulario->contenido : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>