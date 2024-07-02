@extends('templates.template')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <div class="quadros-container">
                    <div class="quadro-item">
                        <a href="{{ route('turistas.index') }}" class="quadro">
                            <span class="quadro-titulo">Turistas</span>
                            <span class="quadro-subtitulo">Subtítulo para Turistas</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('prestadores.index') }}" class="quadro">
                            <span class="quadro-titulo">Prestadores</span>
                            <span class="quadro-subtitulo">Subtítulo para Prestadores</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('usuarios.index') }}" class="quadro">
                            <span class="quadro-titulo">Usuários</span>
                            <span class="quadro-subtitulo">Subtítulo para Usuários</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('isencoes.index') }}" class="quadro">
                            <span class="quadro-titulo">Isenções</span>
                            <span class="quadro-subtitulo">Subtítulo para Isenções</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <div class="quadros-container">
                    <div class="quadro-item">
                        <a href="{{ route('atividades.index') }}" class="quadro">
                            <span class="quadro-titulo">Atividades</span>
                            <span class="quadro-subtitulo">Subtítulo para Atividades</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('comprovantes.index') }}" class="quadro">
                            <span class="quadro-titulo">Comprovantes Emitidos</span>
                            <span class="quadro-subtitulo">Subtítulo para Comprovantes Emitidos</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('config.index') }}" class="quadro">
                            <span class="quadro-titulo">Configurações</span>
                            <span class="quadro-subtitulo">Subtítulo para Configurações</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('validacoes.index') }}" class="quadro">
                            <span class="quadro-titulo">Validações</span>
                            <span class="quadro-subtitulo">Subtítulo para Validações</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <div class="quadros-container">
                    <div class="quadro-item">
                        <a href="{{ route('pagamentos.index') }}" class="quadro">
                            <span class="quadro-titulo">Pagamentos</span>
                            <span class="quadro-subtitulo">Subtítulo para Pagamentos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
