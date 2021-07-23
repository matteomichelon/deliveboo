@extends('layouts.app')

@section('header_scripts')

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>    
    <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.js"></script>
     

@endsection

@section('content')

    <div id="root">
        <div class="container">

            <div class="cart-product-wrapper" v-if="!paymentSuccess">
                <div class="restaurant-show-products d-flex flex-wrap justify-content-center">

                    <h2 v-if="paymentFail">Il pagamento non è andato a buon fine, riprova</h2>

                    <form id="data-form" v-on:submit.prevent="sendData()">                             
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Nome</label>
                                    <input type="text" v-model="formData.name" id="name" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="surname">Cognome</label>
                                    <input type="text" v-model="formData.surname" id="surname" name="surname" class="form-control" />
                                </div>
                            </div>
                        </div>
            
                        <!-- Address input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="address">Indirizzo</label>
                            <input type="text" v-model="formData.address" id="address" name="address" class="form-control" />
                        </div>
            
                        <!-- Telephone Number input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="telephone_number">Numero di telefono</label>
                            <input type="text" v-model="formData.telephone_number" id="telephone_number" name="telephone_number" class="form-control" />
                        </div>
            
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" v-model="formData.email" id="email" name="email" class="form-control" />
                        </div>
            
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="notes">Note per il Rider</label>
                            <textarea class="form-control" v-model="formData.notes" id="notes" name="notes" rows="4"></textarea>
                        </div>
                        
                        <div class="form-outline mb-4">
                            <input type="submit" value="Invia dati per la consegna" class="btn btn-primary" />
                        </div>                        
                    </form>

                    <form id="payment-form" class="d-none">
                        <div class="form-outline mb-4">
                            <div id="dropin-container"></div>
                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <input prevent type="submit" value="Invia Pagamento" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
    
                <div class="restaurant-show-cart">
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
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="cart-total-price">
                            Totale da pagare: <span>€@{{calculateCart()}}</span>
                        </div>
                    </div>                       
                </div>
            </div>

            <div class="restaurant-show-product" v-else>
                <h2 class="message-payment-success">Il pagamento è andato a buon fine. Grazie per aver ordinato da noi!</h2>
            </div>
        </div>
    </div>

@endsection

@section('footer_scripts')

    <!-- Custom Script Start -->
    <script src="{{ asset('js/restaurant_checkout.js') }}"></script>
    <!-- Custom Script End -->

    <!-- Script Start -->
    <script>
        /* Variables */
        const form = document.querySelector('#payment-form');
        const clientToken = "{{ $token }}";

    </script>
    <!-- Script Stop -->

    
    
@endsection