@extends('layouts.app')

@section('header_scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    
@endsection

@section('footer_scripts')
    <script>
        window.restaurant_products = @json($restaurant_products);
        window.restaurant_id = @json($restaurant->id);
    </script>
    
    <script src="{{ asset('js/restaurant_show.js') }}"></script>
@endsection

@section('content')

    <div id="root">
        <section class="restaurant-show">
        
            <div class="restaurant-show-jumbo">
    
                <div class="container_medium d-flex align-items-center">
                    <div>
                        <h1 class="restaurant-show-title">{{$restaurant->restaurant_name}}</h1>
                        <p class="restaurant-show-address pb-5">{{$restaurant->restaurant_address}}</p>                    
                        <a class="btn-deliveboo-white" href="{{route('home')}}" role="button">Torna indietro</a>
                    </div>
                </div>
                
    
            </div>
    
            <div class="container_large">
                <div class="cart-product-wrapper">
                    
                    {{-- PRODUCTS LIST DISPLAY --}}
                    <div class="restaurant-show-products d-flex flex-wrap">
                        <div
                        class="product-card col-sm-6 col-md-6 col-lg-6 "
                        v-for="(product, index) in products"
                        :key="product.id"  
                        >
                            <div style="height: 20em" class="d-flex flex-column justify-content-between">
                                <div>

                                    <img v-if='product.path_load_image' :src="'../storage/' + product.cover"
                                    :alt="'Foto Piatto ' + product.name">

                                    <img v-else :src="product.cover" :alt="'Foto Piatto ' + product.name">

                                    <div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div style="padding-right: 2em">   
                                                <div class="product-card-title">@{{product.name}}</div>
                                                <div class="product-card-body">@{{product.description}}</div>
                                            </div>

                                            <div>
                                                <div class="product-card-price">€@{{product.price}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-control d-flex justify-content-around align-items-center">
                                        <i class="fas fa-minus-circle" v-on:click="removeProduct(product.id); cartProductsDisplay()"></i>
                                        <span>@{{countProduct(product.id)}}</span>
                                        <i class="fas fa-plus-circle" v-on:click="addProduct(index); countProduct(product.id); cartProductsDisplay()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END PRODUCTS LIST DISPLAY --}}

                    {{-- CART DISPLAY --}}
                    <div class="restaurant-show-cart" v-if="cartDisplay.length > 0">
                        <div class="restaurant-show-cart-title">
                            Il tuo carrello:
                        </div>

                        <div
                        class="cart-item"
                        v-for="product in cartDisplay"
                        :key="product.count"
                        >   
                            <div class="restaurant-show-cart-product-name">@{{product.name}}</div>
                            <div class="restaurant-show-cart-product-name">Quantità: @{{countProduct(product.id)}}</div>
                            <div class="restaurant-show-cart-product-price">Prezzo: <span>€@{{calculateProduct(product.id, product.price)}}</span></div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="cart-total-price">
                                Totale da pagare: <span>€@{{calculateCart()}}</span>
                            </div>
                            <div class="cart-checkout">
                                <a class="btn-deliveboo-primary" v-on:click="getRestaurantPaymentData()" href="{{ route('cart') }}">Vai al pagamento</a>
                            </div>
                        </div>                       
                    </div>

                    <div class="restaurant-show-cart" v-if="cartDisplay.length == 0">
                        <div class="restaurant-show-cart-title">
                            Il tuo carrello è vuoto
                        </div>
                    </div>
                    {{-- END CART DISPLAY --}}

                </div>
            </div>       
    
        </section>
    </div>

@endsection