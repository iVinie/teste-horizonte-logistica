<!-- resources/views/edit.blade.php -->

@extends('master')

@section('content')
<nav class="navbar bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="#">
            <img src="http://www.grupohorizonte.com.br/wp-content/themes/layout/imgs/logo.png" alt="logo-hl">
        </a>
    </div>
</nav>
<h2>Editar Frota</h2>

<form action="{{ route('frotas.update', ['frota' => $frota->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="modelo" class="form-label">Modelo:</label>
        <input type="text" class="form-control" name="modelo" value="{{ $frota->modelo }}">
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca:</label>
        <input type="text" class="form-control" name="marca" value="{{ $frota->marca }}">
    </div>

    <div class="mb-3">
        <label for="placa" class="form-label">Placa:</label>
        <input type="text" class="form-control" name="placa" value="{{ $frota->placa }}" readonly>
    </div>

    <div class="mb-3">
        <label for="ano" class="form-label">Ano:</label>
        <input type="text" class="form-control" name="ano" value="{{ $frota->ano }}">
    </div>

    <div class="mb-3">
        <label for="ativo" class="form-label">Ativo:</label>
        <input type="text" class="form-control" name="ativo" value="{{ $frota->ativo }}">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Frota</button>

</form>
@endsection