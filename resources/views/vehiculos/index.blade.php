<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    listado de Vehiculos
                    <table>
                        <thead>
                            <tr>
                                <th>Patente</th>
                                <th>Chasis</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{ $vehiculo->patente }}</td>
                                    <td>{{ $vehiculo->chasis }}</td>
                                    <td>{{ $vehiculo->modelo ? $vehiculo->modelo->nombre : 'N/A' }}</td>
                                    <td>{{ $vehiculo->modelo && $vehiculo->modelo->marca ? $vehiculo->modelo->marca->nombre : 'N/A' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
  

                  
                    
                </div>
            </div>
        </div>
    </div>