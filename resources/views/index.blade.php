@extends('layout.main')

@section('title', 'Inicio')

@section('content')

    <div class="row my-5">
        @foreach ($product as $data)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/products/{{$data->image}}" class="card-img-top" alt="{{$data->name_product}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->name_product }}</h5>
                        <p class="card-text">{{ $data->description }}</p>
                        <p class="card-text">{{ $data->value }}</p>
                        <a href="#" class="btn btn-primary">Comprar ja</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
