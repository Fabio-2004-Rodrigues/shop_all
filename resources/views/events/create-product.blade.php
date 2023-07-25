@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Cadastro de Produto</h2>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="/events" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image_product">Imagem do Produto</label>
                        <input type="file" class="form-control" id="image_product" name="image_product" required>
                    </div>
                    <div class="form-group">
                        <label for="name_product">Nome do Produto</label>
                        <input type="text" class="form-control" id="name_product" name="name_product" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <input type="text" class="form-control" id="category" name="category" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="value">Valor</label>
                        <input type="number" class="form-control" id="value" name="value" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantidade</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
