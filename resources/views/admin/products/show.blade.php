@extends('layouts.app')

@section('content')
<div class="container_large">

    <h1 class="mt-5 mb-4 page-title">{{$product->name}}</h1>  

    <div class="mb-2 product-image-container">
        @if ($product->path_load_image)
            <img src="{{ asset('storage/' . $product->cover) }}" alt="{{ $product->name }}">
        @else
            <img src="{{ $product->cover }}" alt="{{ $product->name }}">
        @endif                  
    </div>

   <div class="card-show-info mt-4 mb-5">
        <h6 class="card-subtitle mb-2 text-muted">€{{ number_format($product->price,2) }}</h6>

        @if ($product->description)
            <p class="card-text">{{$product->description}}</p>
        @endif  
                
        <div class="user-tools">
            <a class="btn btn-primary btn-md" href="{{route('admin.products.index')}}" role="button">Torna indietro</a>
            <a class="btn btn-secondary btn-md" href="{{route('admin.products.edit', ['product' => $product->id])}}" role="button">Modifica prodotto</a>
        </div>
   </div>
   
</div>
@endsection