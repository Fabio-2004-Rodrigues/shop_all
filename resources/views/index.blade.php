@extends('layout.main')

@section('title', 'Inicio')

@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/banner.jpg" class="d-block w-100" style="height: 200px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/banner.jpg" class="d-block w-100" style="height: 200px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/banner.jpg" class="d-block w-100" style="height: 200px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @foreach ($product as $data)
        <div class="card rounded-circle" style="width: 18rem;">
            <img src="/assets/banner.jpg" class="card-img-top rounded-circle" alt="...">
            <p>{{ $data->name_product }}</p>
        </div>
    @endforeach

@endsection
