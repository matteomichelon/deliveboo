@extends('layouts.app')

@section('header_scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('footer_scripts')
    <script>
        window.restaurant_products = @json($restaurant_products);
    </script>

    <script src="{{ asset('js/restaurant_show.js') }}"></script>
@endsection

@section('content')

    <div id="root">
        <section class="restaurant-show">
        
            <div class="restaurant-show-jumbo">
    
                <div class="container_medium">
                    <h1 class="restaurant-show-title">{{$restaurant->restaurant_name}}</h1>
                    <p class="restaurant-show-address">{{$restaurant->restaurant_address}}</p>
                    
                    <a class="btn-deliveboo-white" href="{{route('home')}}" role="button">Torna indietro</a>
                </div>
                
    
            </div>
    
            <div class="container_large">
                <div class="row">
    
                    <div class="col-8 restaurant-show-products d-flex flex-wrap">
                        <div
                        class="product-card"
                        v-for="(product, index) in products"
                        :key="product.id"  
                        >
                            <img :src="product.cover" alt="product.name">
                            <div>@{{product.name}}</div>
                            <div>@{{product.price}}</div>
                            <div>@{{product.description}}</div>
                            <div class="product-control">
                                <i class="fas fa-minus" v-on:click="removeProduct(product.id)"></i>
                                <span>@{{countProduct(product.id)}}</span>
                                <i class="fas fa-plus" v-on:click="addProduct(index); countProduct(product.id); cartProductsDisplay()"></i>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-4 restaurant-show-cart">
                        <div
                        class="product-card"
                        v-for="(product, index) in cartDisplay"
                        :key="product.count">   
                            <div>@{{product.name}}</div>
                            <div>Price: @{{product.price}}</div>
                            <div>Count: @{{product.count}}</div>
                            <div class="product-control">
                                <i class="fas fa-minus" v-on:click="removeProduct(product)"></i>
                                    <span>@{{countProduct(product.id)}}</span>
                                <i class="fas fa-plus" v-on:click="addProduct(index) cartProductsDisplay()"></i>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>       
    
        </section>
    </div>

@endsection