@extends('layouts.app')

@section('content')
<div class="container_large">

    <div class="col-sm-12">
        <h1 class="page-title mt-5 mb-0">Tutti i tuoi prodotti</h1>
    </div>

    <div class="cart-product-wrapper">
        
        <div class="restaurant-show-products d-flex flex-wrap w-100 px-0">
            @foreach ($products as $product)
                {{-- Product Card --}}
                <div class="product-card col-sm-12 col-md-6 col-lg-4 {{ $product->visibility == 0 ? 'not-visible' : '' }}">
                        
                    <div class="container-image">                    
                        @if ($product->path_load_image) )
                            <img src="{{ asset('storage/' . $product->cover) }}" class="card-img-top" alt="{{$product->name}}">
                        @else
                            <img src="{{ $product->cover }}" class="card-img-top" alt="{{$product->name}}">
                        @endif
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">€{{ number_format($product->price,2) }}</h6>

                        @if ($product->description)
                            <p class="card-text">{{substr($product->description, 0, 70)}}...</p>
                        @endif

                        {{-- USER TOOLS --}}
                        <a href="{{route('admin.products.show', ['product' => $product->id])}}" class="btn btn-success mt-1">Visualizza</a>
                        <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-secondary mt-1">Modifica</a>
                        <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post" class="mt-1">
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
</div>
@endsection