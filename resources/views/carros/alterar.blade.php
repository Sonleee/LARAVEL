@extends("template_admin.index")

@section("conteudo")
    <h2>Alterar Dados do Carro</h2>

    <div class="conteiner">
        <form action="{{route('carros.alterar')}}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo" value="{{$carro->modelo}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Marca:</label>
                <input type="text" class="form-control" name="marca" value="{{$carro->marca}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Ano:</label>
                <input type="number" class="form-control" name="ano_fabricacao" value="{{$carro->ano_fabricacao}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Cor:</label>
                <input type="text" class="form-control" name="cor" value="{{$carro->cor}}">
            </div>
            <button type="submit" class="btn btn-success" title="SALVAR">Salvar</button>
        </form>
@endsection