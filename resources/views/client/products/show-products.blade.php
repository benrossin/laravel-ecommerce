
@extends('default-layout')

@section('title-page', $titlePage)

@section('content')

<div style="margin-top: 200px;">
{{ dd($products) }}
</div>

@endsection