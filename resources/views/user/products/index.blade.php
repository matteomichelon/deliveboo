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
                    {{-- USER TOOLS --}}
                    <a href="{{route('user.products.show', ['product' => $product->id])}}" class="btn btn-success">Visualizza</a>
                    <a href="{{route('user.products.edit', ['product' => $product->id])}}" class="btn btn-secondary">Modifica</a>
                    <form action="{{ route('user.products.destroy', ['product' => $product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Cancella prodotto">
                    </form>
                    {{-- END USER TOOLS --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection