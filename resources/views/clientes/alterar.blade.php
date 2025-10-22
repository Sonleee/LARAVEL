@extends('template_admin.index')

@section('conteudo')
    <h1 class="text-2xl font-bold mb-6">Editar Cadastro do Cliente</h1>

    <form method="POST" action="{{ route('clientes.alterar', $cliente->id) }}">
        @csrf
        <div class="col">
            <div class="row">
                <!-- Nome -->
                <div class="col-3">
                <label for="formGroupExampleInput" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" value="{{old('nome')}}">
                </div>
                <!-- CPF -->
                <div class="col-3">
                <label for="formGroupExampleInput2" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                </div>
                <!-- Telefone -->
                <div class="col-3">
                <label for="formGroupExampleInput3" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone">
                </div>
                <!-- E-mail -->
                <div class="col-6">
                <br>
                <label for="formGroupExampleInput4" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Salvar Alterações</button>
    </form>
@endsection