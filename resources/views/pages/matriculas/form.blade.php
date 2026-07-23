@extends('layouts.app')

@section('title', 'formulario matricula')

@section('content')
    <form action="{{ route('matricula.store') }}" method="POST">
        @csrf
        <div class="mx-auto w-100 text-center">
            <div class="">
                <p class="px-10 rounded-t-3xl text-center text-white font-bold bg-blue-700">FORMULARIO
                    MATRICULA</p>
            </div>
            <div class="flex flex-col items-center justify-center py-3 rounded-b-3xl text-center bg-gray-300">
                <label for="date" class="font-semibold">Fecha</label>
                <input type="date" name="date" id="date" class="rounded-3xl bg-white w-30 text-center">
                <label for="code" class="font-semibold">Código</label>
                <input type="text" name="code" id="code" class="rounded-3xl bg-white w-30 text-center">
                <label for="nuid" class="font-semibold">Nuid</label>
                <input type="text" name="nuid" id="nuid" class="rounded-3xl bg-white w-30 text-center">
                <label for="meter_number" class="font-semibold">Número Matrícula</label>
                <input type="text" name="meter_number" id="meter_number" class="rounded-3xl bg-white w-30 text-center">
                <label for="rip_status" class="font-semibold">Rotura</label>
                <select name="rip_status" id="rip_status" class="rounded-3xl bg-white w-30 text-center">
                    <option value="1" class="text-black">Sí</option>
                    <option value="0" class="text-black" selected>No</option>
                </select>
            </div> 
            <button type="submit">Guardar</button>
        </div>
    </form>
@endsection
