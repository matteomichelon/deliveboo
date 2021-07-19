@extends('layouts.app')

@section('content')

    <section class="container">
        
        <div class="jumbotron">

            <h1 class="display-4">{{$restaurant->restaurant_name}}</h1>
            <p class="lead">{{$restaurant->restaurant_address}}</p>
            
            <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Torna indietro</a>

        </div>

        <div class="container_large">
            <form action="{{ route('cart.quantity') }}" method="post">
                @csrf
                @method('POST')                

                <div class="container-box d-flex flex-wrap">

                    @foreach ($restaurant_products as $product)
                        
                        {{-- Product Card --}}
                        <div class="card-product">
                                            
                            <div class="container-image">
                                {{--  If the product has a cover image set it will display it, otherwise
                                it will display a standard image.    --}}
                                
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
    
                                <label for="quantity">Quantità</label>
                                <input type="number" id="quantity" name="quantity[{{$product->id}}]">
                            </div>
                        </div>           
    
                    @endforeach

                    <input type="submit" class="btn btn-success" value="Aggiungi al carrello">
    
                </div>
            </form>
        </div>       

    </section>

@endsection