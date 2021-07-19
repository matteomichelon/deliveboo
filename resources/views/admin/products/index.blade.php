@extends('layouts.app')

@section('content')
<div class="container_large">
    <div class="container-box d-flex flex-wrap">
        
        @foreach ($products as $product)
            @if(Auth::id() == $product->user_id)
            {{-- Product Card --}}
            <div class="card-product">
                
                
                <div class="container-image">
                    {{--  If the product has a cover image set it will display it, otherwise
                    it will display a standard image.    --}}
                    
                    @if (isset($product->cover) )
                        <img src="{{$product->cover}}" class="card-img-top" alt="{{$product->name}}">
                    @else
                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{$product->name}}">
                    @endif
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">€{{ number_format($product->price,2) }}</h6>

                    @if ($product->description)
                        <p class="card-text">{{substr($product->description, 0, 70)}}...</p>
                    @endif

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
            @endif

        @endforeach

    </div>
</div>
@endsection