@extends('templates.template')
@section('title', 'Cadastrar Taxa')
@section('content')

    <form action="#" method="post">
        <input type="text" name="descricao" placeholder="Descrição">
        <input type="text" name="valor" placeholder="Valor">
        <input type="text" name="perm_min" placeholder="Permanência mínima">
        <input type="text" name="vlr_adicional" placeholder="Valor Adicional">
        <input type="text" name="perm_min_dias_adicionais" placeholder="Permanência mínima dias adicionais:">
        <input type="text" name="ativo" placeholder="Ativo">
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection
