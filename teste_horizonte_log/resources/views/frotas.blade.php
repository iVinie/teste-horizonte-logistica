@extends('master')

@section('content')
<nav class="navbar bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="#">
      <img src="http://www.grupohorizonte.com.br/wp-content/themes/layout/imgs/logo.png" alt="logo-hl">
    </a>
    <div>]
      <a href="{{ route('frotas.create') }}"><button type="button" class="btn btn-primary">Adicionar
          veiculo</button></a>
      <a href="{{ route('upload.form') }}"><button type="button" class="btn btn-primary">Upload CSV</button></a>
    </div>

  </div>
</nav>

<h2>Frota</h2>
<table class="table">
  <tr>
    <th scope="col">Contagem</th>
    <th scope="col">Modelo</th>
    <th scope="col">Marca</th>
    <th scope="col">Placa</th>
    <th scope="col">Ano</th>
    <th scope="col">Ativo</th>
    <th scope="col">Opções</th>
  </tr>
  @foreach($frotas as $frota)
  <tr>
    <td>{{ $frota->id }}</td>
    <td>{{ $frota->modelo }}</td>
    <td>{{ $frota->marca }}</td>
    <td>{{ $frota->placa }}</td>
    <td>{{ $frota->ano }}</td>
    <td>{{ $frota->ativo }}</td>
    <td>
      <a href="{{ route('frotas.edit', ['frota' => $frota->id]) }}">
      <button type="button" class="btn btn-primary">Editar</button>
      </a>
      <form action="{{ route('frotas.destroy', $frota->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary" type="submit" onclick="return confirm('Deseja realmente excluir?')">Deletar</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection