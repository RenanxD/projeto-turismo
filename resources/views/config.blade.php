@extends('adminlte::page')
@section('title', 'Configurações')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg p-6">
                <div class="quadros-container">
                    <div class="quadro-item">
                        <a href="{{ route('config.usuarios.index') }}" class="quadro">
                            <i class="fas fa-user-cog fa-2x mb-3"></i>
                            <span class="quadro-titulo">Usuários</span>
                            <span class="quadro-subtitulo">Gerencie as funcionalidades dos usuários</span>
                        </a>
                    </div>
                    <div class="quadro-item">
                        <a href="{{ route('taxas.index') }}" class="quadro">
                            <i class="fas fa-dollar-sign fa-2x mb-3"></i>
                            <span class="quadro-titulo">Valores e Taxas</span>
                            <span class="quadro-subtitulo">Gerenciamento dos valores e taxas</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@stop
