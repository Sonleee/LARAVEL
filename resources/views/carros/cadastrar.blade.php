@extends("template_admin.index")

@section("conteudo")
    <h2>Cadastrar Carro</h2>

    <div class="conteiner">
        <form action="{{route('carros.novo')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" name="marca">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="number" class="form-control" name="ano_fabricacao">
            </div>
            <div class="mb-3">
                <label for="cor" class="form-label">Cor:</label>
                <input type="text" class="form-control" name="cor">
            </div>
            <button type="submit" class="btn btn-success" title="SALVAR">Cadastrar</button>
        </form>
@endsection