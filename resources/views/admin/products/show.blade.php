@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">{{$product['name']}}</h1>
        <h6 class="card-subtitle mb-2 text-muted">€{{$product->price}}</h6>
        <p class="lead">{{$product['description']}}</p>
        <a class="btn btn-primary btn-lg" href="{{route('admin.products.index')}}" role="button">Torna indietro</a>
        <a class="btn btn-secondary btn-lg" href="{{route('admin.products.edit', ['product' => $product->id])}}" role="button">Modifica prodotto</a>
    </div>
</div>
@endsection