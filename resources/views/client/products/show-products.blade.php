
@extends('default-layout')

@section('title-page', $titlePage)

@section('content')

<div class="products-nav">
    <div class="container">
        <div class="content-products-nav">
            <div class="products-nav-content">
                <a href="{{ route('home') }}">Accueil</a> >
                <a href="{{ route('products.show', ['sex' => $sex->url]) }}">{{ $sex->libelle }}</a>
                @isset($category)
                    >
                    <a href="{{ route('products.by-category', ['sex' => $sex->url, 'category' => $category->url]) }}">{{ $category->libelle }}</a>
                @endisset
                @isset($subcategory)
                    >
                    <a href="{{ route('products.by-subcategory', ['sex' => $sex->url, 'category' => $category->url, 'subcategory' => $subcategory->url]) }}">{{ $subcategory->libelle }}</a>
                @endisset
            </div>
            <span class="number-products">
                @if(count($products) > 1)
                    {{ count($products) }} articles
                @elseif(count($products) == 1)
                    {{ count($products) }} article
                @else
                    Aucun article
                @endif
            </span>
        </div>
    </div>
</div>

<div class="search-results">
    <products class="fcontent container" :list-products="{{ json_encode($products) }}"></products>
</div>

@endsection