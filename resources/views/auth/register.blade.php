@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex">

        <div class="md:w-1/2">
            <p>Imagen aquí</p>
        </div>

        <div class="md:w-1/2">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Ingrese nombre" class="border p-3 w-full rounded-lg"></input>
                </div>

                <div class="mb-5">
                    <label for="user" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Usuario</label>
                    <input id="user" name="user" type="text" placeholder="Ingrese usuario" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Correo</label>
                    <input id="email" name="email" type="text" placeholder="Ingrese correo" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Contraseña</label>
                    <input id="password" name="password" type="text" placeholder="Ingrese contraseña" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Repetir contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="text" placeholder="Ingrese contraseña" class="border p-3 w-full rounded-lg">
                </div>
            </form>
        </div>

    </div>
@endsection
