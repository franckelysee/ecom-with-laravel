@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
        @if ($produit->category->parent !== null)
            <li class="breadcrumb-item"><a href="{{ route('voirCategorie', ['id' => $produit->category->parent->id]) }}">{{ $produit->category->parent->nom }}</a></li>
        @endif
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('voirCategorie', ['id' => $produit->category->id]) }}">{{ $produit->category->nom }}</a></li>
    </ol>
</nav>
<main role="main">


    <div class="container">


        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ asset('produits/'.$produit->image) }}" alt="{{ $produit->image }}">

                </div>
            </div>
            <div class="col-6">

                <h1 class="jumbotron-heading">{{ $produit->nom }}</h1>
                <h5>{{ $produit->prix }}</h5>
                <p class="lead text-muted">{{ $produit->description }}</p>
                @foreach ($produit->tags as $tag)

                    <p class="badge bg-secondary"><a href="{{ route("voirTag",['id' => $tag->id]) }}" class="text-white text-decoration-none">{{ $tag->nom }} </a></p>
                @endforeach


                <hr>
                <label for="size">Choisissez votre taille</label>
                <select name="size" id="size" class="form-control">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
                <p>
                    <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </p>

            </div>
        </div>
    </div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Vous aimerez aussi :</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{ asset('produits/hulk.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{ asset('produits/krusty_simpsons.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{ asset('produits/star_trek_kirk.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</main>
@endsection
