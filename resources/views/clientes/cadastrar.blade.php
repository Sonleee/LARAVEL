@extends('template_admin.index')
@section('conteudo')
    <h1>Cadastro de Clientes</h1>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        
    @endif
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post" action="{{route('clientes.novo')}}">
    @csrf
    <div class="col">
        <div class="row">
            <!-- Nome -->
            <div class="col">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" value="{{old('nome')}}">
            </div>
            <!-- CPF -->
            <div class="col">
            <label for="formGroupExampleInput2" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
            </div>
            <!-- Telefone -->
            <div class="col">
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
    
    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
</form>
@endsection