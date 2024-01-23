
@extends('home')
@section('content')
<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($produits as $produit)
            <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('produits/'.$produit->image) }}" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">{{ $produit->nom }} <br> {{ $produit->description }}</p>
                        <p class="badge bg-secondary"><a href="{{ route("produit",['id' => $produit->id]) }}" class="text-white text-decoration-none">{{ $produit->category->nom }} </a></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">{{number_format($produit->prix ,2) }} €</span>
                            <a href="{{ route("produit",['id' => $produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                        </div>
                        </div>
                    </div>
            </div>
        @endforeach


      </div>
    </div>
    <style>
    </style>
@endsection
