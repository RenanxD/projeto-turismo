@extends('templates.template')
@section('title', 'Valores e Taxas')
@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg p-6">
            <div class="quadros-container">
                <div class="quadro-item">
                    <a href="{{ route('config.valores_e_taxas_create') }}" class="quadro">
                        <span class="quadro-titulo">Adicionar Taxa</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
