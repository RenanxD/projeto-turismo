@extends('templates.template')
@section('title', 'Valores e Taxas')
@section('content')
    <div class="container mt-5">
{{--        @if ($errors->any())--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{ $error }}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
{{--        @if(session()->has('success'))--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                {{ session('success') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Taxa atual</h5>
                        @if ($taxaAtual && $taxaAtual->taxa_ativa)
                            <p class="card-text"><strong style="font-size: 14px;">Descrição:</strong><br>{{ $taxaAtual->descricao }}</p>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Data da Ativação:</strong><br>{{ \Carbon\Carbon::parse($taxaAtual->created_at)->format('d/m/Y') }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Valor Mínimo:</strong><br>R$ {{ number_format($taxaAtual->valor, 2, ',', '.') }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Permanência Mínima:</strong><br>{{ $taxaAtual->taxa_perm_minima }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Valor Diário Adicional:</strong><br>R$ {{ number_format($taxaAtual->taxa_vlr_adicional, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn-custom btn-edit" data-toggle="modal" data-target="#modal-create">
                                Nova Taxa
                            </button>
                        @elseif ($ultimaTaxaAtiva)
                            <p class="card-text"><strong style="font-size: 14px;">Última Taxa Ativa:</strong><br>{{ $ultimaTaxaAtiva->descricao }}</p>
                            <div class="row">
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Data da Ativação:</strong><br>{{ \Carbon\Carbon::parse($ultimaTaxaAtiva->created_at)->format('d/m/Y') }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Valor Mínimo:</strong><br>R$ {{ number_format($ultimaTaxaAtiva->valor, 2, ',', '.') }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Permanência Mínima:</strong><br>{{ $ultimaTaxaAtiva->taxa_perm_minima }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="card-text"><strong style="font-size: 14px;">Valor Diário Adicional:</strong><br>R$ {{ number_format($ultimaTaxaAtiva->taxa_vlr_adicional, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn-custom btn-edit" data-toggle="modal" data-target="#modal-create">
                                Nova Taxa
                            </button>
                        @else
                            <p>Nenhuma taxa cadastrada ainda.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Todas as Taxas Cadastradas</h5>
                        @if (count($taxas) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Data da Ativação</th>
                                    <th>Valor Mínimo</th>
                                    <th>Permanência Mínima</th>
                                    <th>Valor Diário Adicional</th>
                                    <th>Situação</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($taxas as $taxa)
                                    <tr>
                                        <td>{{ $taxa->descricao }}</td>
                                        <td>{{ \Carbon\Carbon::parse($taxa->created_at)->format('d/m/Y') }}</td>
                                        <td>R$ {{ number_format($taxa->valor, 2, ',', '.') }}</td>
                                        <td>{{ $taxa->taxa_perm_minima }}</td>
                                        <td>R$ {{ number_format($taxa->taxa_vlr_adicional, 2, ',', '.') }}</td>
                                        <td>
                                            @if ($taxa->taxa_ativa)
                                                Ativa
                                            @else
                                                Inativa
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#modal-edit{{ $taxa->id }}">
                                                Editar
                                            </button>
                                        </td>
{{--                                        <a href="{{ route('modal.valores_e_taxas_edit', $taxa->id) }}">Editar</a>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $taxas->links() }}
                        @else
                            <p>Nenhuma taxa cadastrada ainda.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('config.modal.valores_e_taxas_create')
    @include('config.modal.valores_e_taxas_edit')
@endsection
