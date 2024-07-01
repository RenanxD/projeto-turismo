<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="quadros-container">
                    <a href="{{ route('turistas') }}" class="quadro">
                        Turistas
                    </a>
                    <a href="{{ route('prestadores') }}" class="quadro">
                        Prestadores
                    </a>
                    <a href="{{ route('usuarios') }}" class="quadro">
                        Usuários
                    </a>
                    <a href="{{ route('isencoes') }}" class="quadro">
                        Isenções
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .quadros-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px; /* Espaçamento entre os quadros */
        }

        .quadro {
            flex: 1;
            min-width: 200px; /* Largura mínima para cada quadro */
            max-width: 24%; /* Ajuste conforme necessário */
            height: 150px;
            background-color: white;
            color: black;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .quadro:hover {
            background-color: #f9fafb;
        }
    </style>
</x-app-layout>
