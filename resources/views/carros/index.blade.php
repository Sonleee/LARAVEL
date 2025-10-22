@extends('template_admin.index')

@section('conteudo')

<tbody>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <h1 class="navbar-brand">Lista de Carros</h1>
    </nav>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Ano de Fabricação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carros as $carro)
                    <tr>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->modelo }}</td> 
                        <td>{{ $carro->cor }}</td>
                        <td>{{ $carro->ano_fabricacao }}</td>
                        <td><a href="{{route('carros.buscar', $carro->id)}}" class="btn btn-primary">Buscar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</tbody>

@endsection
