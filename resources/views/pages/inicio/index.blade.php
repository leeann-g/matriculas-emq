@extends('layouts.app')

@section('content')
    <div class="bg-blue-700  mx-auto text-center w-fit px-10 rounded-3xl py-10">
        <p class="text-white text-5xl font-bold">
            GESTIÓN DE MATRÍCULAS Y ROTURAS
        </p>

        <p class="text-white text-4xl font-bold">
            (SIN MATRÍCULA, NO EXISTE ROTURA)
        </p>
        <a href=""
            class="flex items-center justify-center gap-3 w-fit mx-auto mt-10 bg-green-700 px-8 py-4 rounded-3xl ">
            <img src="{{ asset('images/icons/anadir.png') }}" alt="Añadir Magnific" class="h-10 w-10">
            <span class="text-white text-3xl font-bold">Matricula</span>
        </a>
    </div>
    <div class="mx-auto mt-10 w-fit">
        <div class="rounded-t-3xl px-10 bg-blue-700 text-center text-white text-3xl font-bold">
            PANEL DE INFORMACIÓN
        </div>
        <div class="flex rounded-b-3xl items-center justify-center gap-20 bg-gray-300 py-10">
            <div class="w-fit">
                <div class="flex gap-3 rounded-t-3xl bg-green-700 text-2xl text-white font-bold p-2">
                    <span>Matriculas</span>
                </div>
                <div class=" flex p-5 gap-5 rounded-b-3xl  bg-white text-center">
                    <img src="{{ asset('images/icons/matriculas.png') }}" alt="Matriculas" class="h-5 w-5">
                    225
                </div>
            </div>
            <div class="w-fit">
                <div class="rounded-t-3xl bg-green-700 text-2xl text-white text-center font-bold p-2">
                    Roturas
                </div>
                <div class="flex p-5 gap-5 rounded-b-3xl bg-white text-center">
                    <img src="{{ asset('images/icons/rotura-asfalto.png') }}" alt="" class="h-5 w-5">
                    130
                </div>
            </div>
        </div>
    </div>
@endsection
