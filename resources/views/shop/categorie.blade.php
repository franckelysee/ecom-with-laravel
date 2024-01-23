@extends('shop')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if (isset($category))
            @if (($category->parent) !== null)
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('voirCategorie', ['id' => $category->parent->id]) }}">{{ $category->parent->nom }}</a>
                </li>
            @endif

            <li class="breadcrumb-item active" aria-current="page">{{ $category->nom }}</li>

            @foreach ($category->children as $children  )

                <li class="breadcrumb-item"><a href="{{ route('voirCategorie', ['id' => $children->id]) }}">{{ $children->nom }}</a></li>

            @endforeach
        @else
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('voirTag', ['id' => $tag->id]) }}">{{ $tag->nom }}</a></li>
        @endif

    </ol>
</nav>

<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ asset('produits/'.$produit->image) }}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">{{ $produit->nom }}<br> {{ $produit->description }} </p>
                                <p class="badge bg-secondary"><a href="{{ route("produit",['id' => $produit->id]) }}" class="text-white text-decoration-none">{{ $produit->category->nom }} </a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{ number_format($produit->prix ,2) }} €</span>
                                    <a href="{{ route("produit",['id' => $produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">


            </div>
        </div>
    </div>

</main>
@endsection
