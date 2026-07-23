<nav class="flex items-center  justify-center p-10 gap-10 sticky">
    <a href=" {{ route('index') }}" class="bg-blue-700 gap-3 rounded-2xl p-3 flex items-center justify-center">
        <img src="{{ asset('images/icons/inicio.png') }}" alt="Inicio propiedad Aldo Cervantes" class="h-5 w-5">
        <span class="text-center text-white text-2xl font-bold">INICIO</span>
    </a>
    <a href=" {{ route('matricula.index') }}" class="bg-blue-700 gap-3 rounded-2xl p-3 flex items-center justify-center">
        <img src="{{ asset('images/icons/matriculas.png') }}" alt="matriculas propiedad Smashicons" class="h-5 w-5">
        <span class="text-center text-white text-2xl font-bold">Matricula</span>
    </a>
    <a href=" {{ route('index') }}" class="bg-blue-700 gap-3 rounded-2xl p-3 flex items-center justify-center">
        <img src="{{ asset('images/icons/rotura.png') }}" alt="Inicio propiedad Flat Icons" class="h-8 w-12">
        <span class="text-center text-white text-2xl font-bold">Rotura</span>
    </a>
</nav>