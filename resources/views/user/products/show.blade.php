@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">{{$product['name']}}</h1>
        <h6 class="card-subtitle mb-2 text-muted">€{{$product->price}}</h6>
        <p class="lead">{{$product['description']}}</p>
        <h6 class="card-subtitle mb-2 ">{{$product->sku}}</h6>
        <a class="btn btn-primary btn-lg" href="{{route('user.products.index')}}" role="button">Torna indietro</a>
    </div>
</div>
@endsection