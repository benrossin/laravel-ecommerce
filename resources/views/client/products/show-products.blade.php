
@extends('default-layout')

@section('title-page', $titlePage)

@section('content')

<div class="products-nav">
    <div class="container">
        <div class="content-products-nav">
            <div class="products-nav-content">
                <a href="{{ route('home') }}">Accueil</a> >
                <a href="{{ route('products.show', ['sex' => $sex['sex_url']]) }}">{{ $sex['sex_libelle'] }}</a>
                @isset($category)
                    >
                    <a href="{{ route('products.by-category', ['sex' => $sex['sex_url'], 'category' => $category['category_url']]) }}">{{ $category['category_libelle'] }}</a>
                @endisset
                @isset($subcategory)
                    >
                    <a href="{{ route('products.by-subcategory', ['sex' => $sex['sex_url'], 'category' => $category['category_url'], 'subcategory' => $subcategory['subcategory_url']]) }}">{{ $subcategory['subcategory_libelle'] }}</a>
                @endisset
            </div>
            <span class="number-products">
                @if(count($products) > 1)
                    {{ count($products) }} articles
                @else
                    {{ count($products) }} article
                @endif
            </span>
        </div>
    </div>
</div>

@endsection