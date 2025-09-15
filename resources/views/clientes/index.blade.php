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
<form method="post" action="{{route('cliente.novo')}}">
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
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Digite seu telefone">
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <!-- E-mail -->
            <div class="col-6">
            <br>
            <label for="formGroupExampleInput4" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="formGroupExampleInput4" placeholder="Digite seu e-mail">
            </div>
            <!-- Sexo -->
            <br>
            <span  for="inputSexo" class="form-label">Sexo</span>
            <select id="inputSexo" class="form-select" aria-label="Default select example">
            <option selected>Selecione</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            </select>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <!-- Data de Nascimento, Endereço, Número, Bairro, Cidade, Estado -->
            <div class="col">
                <br>
                <label for="formGroupExampleInput5" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="formGroupExampleInput5">
            </div>
            <div class="col-6">
                <br>
                <label for="inputAddress2" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-3">
                <br>
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-3">
                <br>
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <br>
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
</form>
@endsection