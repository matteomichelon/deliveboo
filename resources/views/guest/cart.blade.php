@extends('layouts.app')

@section('header_scripts')

    <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>     

@endsection

@section('content')

    <div id="root">
        <div class="container">

            <div class="row mt-5 py-5 align-items-stretch">
                <div class="col-8 d-flex flex-wrap">
                    <form id="payment-form" v-on:submit.prevent="sendPayment()">      
                        
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
                        
            
                        <!-- Dropin Container Braintree -->
                        <div class="form-outline mb-4">
                            <div id="dropin-container"></div>                           
                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <input type="submit" value="Invia Pagamento" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
    
                <div class="col-4 restaurant-show-cart">
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
        </div>
    </div>

@endsection

@section('footer_scripts')    

    <!-- Script Start -->
    <script>
        /* Variables */
        const form = document.querySelector('#payment-form');
        const clientToken = "{{ $token }}";

        /* Braintree Create */
        braintree.dropin.create({
                authorization: clientToken,
                container: '#dropin-container'
            },

            /* Add Event Listener */
            function(error, dropinInstance) {
                form.addEventListener('submit',

                    /* Request Payment Method */
                    function(event) {
                        event.preventDefault();
                        dropinInstance.requestPaymentMethod(

                            /* Find Error */
                            function(error, payload) {
                                if (error) {
                                    console.log('Request Payment Method Error', error);
                                    return;
                                }

                                /* Nonce query */
                                document.querySelector('#nonce').value = payload.nonce;
                                form.submit();

                            });
                    });
            });
    </script>
    <!-- Script Stop -->

    <script src="{{ asset('js/restaurant_checkout.js') }}"></script>
    
@endsection