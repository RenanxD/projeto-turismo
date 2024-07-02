<x-app-layout>
    @if(!Request::is('dashboard'))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center">
                    <button onclick="window.history.back()" class="btn-back botao-voltar">
                        <div class="circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                    </button>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-6">
                        @yield('title')
                    </h2>
                </div>
            </div>
        </header>
    @endif
    <body>
        @yield('content')
    </body>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</x-app-layout>
