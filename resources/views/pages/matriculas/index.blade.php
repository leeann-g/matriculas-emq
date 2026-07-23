    @extends('layouts.app')

    @section('title', 'Inicio Matriculas')

    @section('content')
        <table class="mx-auto border-separate border-spacing-4 border">
            <thead class="border">
                <tr class="border">
                    <th>
                        ID
                    </th>
                    <th>
                        Fecha
                    </th>
                    <th>
                        Código
                    </th>
                    <th>
                        NUID
                    </th>
                    <th>
                        Número de Matrícula
                    </th>
                    <th>
                        Rotura
                    </th>
                    <th>
                        Ver
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($matriculas as $matricula)
                    <tr class="text-center">
                        <td>
                            {{ $matricula->id }}
                        </td>
                        <td>
                            {{ $matricula->date }}
                        </td>
                        <td>
                            {{ $matricula->code }}
                        </td>
                        <td>
                            {{ $matricula->nuid }}
                        </td>
                        <td>
                            {{ $matricula->meter_number }}
                        </td>
                        <td>
                            {{ $matricula->rip_status ? 'Sí' : 'No' }}
                        </td>
                        <td>
                            @if ($matricula->rip_status)
                                <a href="" class="rounded px-4 py-2 text-white bg-blue-700">
                                    Ver
                                </a>
                                @else
                                <a href="" class="rounded px-4 py-2 text-white bg-gray-500">
                                    Ver
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
