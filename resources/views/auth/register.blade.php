@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center ">

        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate >
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Ingrese nombre" class="border p-3 w-full rounded-lg @error('name') border-red-600 @enderror" value="{{old('name')}}"></input>

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="user" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Usuario</label>
                    <input id="user" name="user" type="text" placeholder="Ingrese usuario" class="border p-3 w-full rounded-lg @error('user') border-red-600 @enderror" value="{{old('user')}}"">

                    @error('user')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Correo</label>
                    <input id="email" name="email" type="text" placeholder="Ingrese correo" class="border p-3 w-full rounded-lg @error('email') border-red-600 @enderror" value="{{old('email')}}"">

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Contraseña</label>
                    <input id="password" name="password" type="text" placeholder="Ingrese contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-600 @enderror" value="{{old('password')}}"">

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block uppercase text-gray-500 font-bold text-1xl mb-10">Repetir contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="text" placeholder="Ingrese contraseña" class="border p-3 w-full rounded-lg ">

                    {{--
                    @error('password_confirmation') border-red-600 @enderror" value="{{old('password_confirmation')}}"

                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                    --}}
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounder-lg"/>
            </form>
        </div>

    </div>
@endsection
