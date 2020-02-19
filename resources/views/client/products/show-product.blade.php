
@extends('default-layout')

@section('title-page', $titlePage)

@section('content')

<div class="products-nav">
    <div class="container">
        <div class="content-products-nav">
            <div class="products-nav-content">
                <a href="{{ url()->previous() }}">< Retour</a>
            </div>
            <a href="#" class="like-product"><i class="far fa-heart"></i></a>
        </div>
    </div>
</div>

<div class="product-infos padtb-50">
    <page-product class="fcontent container" :product="{{ json_encode($product) }}" :sizes="{{ json_encode($sizes) }}" :colors="{{ json_encode($colors) }}"></page-product>
</div>

@endsection