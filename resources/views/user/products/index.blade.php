@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">€{{$product->price}}</h6>
                <p class="card-text">{{$product->description}}</p>
                <h6 class="card-subtitle mb-2 ">{{$product->sku}}</h6>
                <a href="{{route('user.products.show', ['product' => $product->id])}}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection