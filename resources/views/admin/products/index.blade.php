@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                
                {{-- 
                    If the product has a cover image set it will display it, otherwise
                    it will display a standard image.    
                --}}
                @if (isset($product->cover) )
                    <img src="{{$product->cover}}" class="card-img-top" alt="{{$product->name}}">
                @else
                    <img src="https://picsum.photos/300" class="card-img-top" alt="{{$product->name}}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">€{{$product->price}}</h6>
                    <p class="card-text">{{$product->description}}</p>

                    {{-- USER TOOLS --}}
                    <a href="{{route('admin.products.show', ['product' => $product->id])}}" class="btn btn-success">Visualizza</a>
                    <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-secondary">Modifica</a>
                    <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('Sicuro che vuoi eliminare il post?')" class="btn btn-danger" value="Cancella prodotto">
                    </form>
                    {{-- END USER TOOLS --}}

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection