@extends('template_admin.index')

@section('conteudo')

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <h1 class="navbar-brand">Lista de Pessoas</h1>
    </nav>

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    
                    <td><a href="{{ route('clientes.alterar', $cliente->id) }}" class="btn btn-primary">Editar</a></td>
                    <td><form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" onsubmit="return confirm('Excluir este cliente?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
