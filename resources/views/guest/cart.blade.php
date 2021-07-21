@extends('layouts.app')

@section('header_scripts')

  <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.js"> </script> 

@endsection

@section('content')

    <div class="container">

        <div class="container-box d-flex flex-wrap">
            {{-- Prodotti selezionati --}}
            
                
            {{-- Product Card --}}
            <div class="card-product">                                                                
                <div class="card-body">
                    <h5 class="card-title">ProductName</h5>
                    <h6 class="card-subtitle mb-2 text-muted">€ProductPrice</h6>                                                                        
                </div>
            </div>           

            
        </div>

        <form id="payment-form" action="{{ route('cart.checkout') }}" method="POST">
            @csrf
            ​@method('POST')                        

            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="name">Nome</label>
                        <input type="text" id="name" name="name" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="surname">Cognome</label>
                        <input type="text" id="surname" name="surname" class="form-control" />
                    </div>
                </div>
            </div>

            <!-- Address input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="address">Indirizzo</label>
                <input type="text" id="address" name="address" class="form-control" />
            </div>

            <!-- Telephone Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="telephone_number">Numero di telefono</label>
                <input type="text" id="telephone_number" name="telephone_number" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="notes">Note per il Rider</label>
                <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
            </div>

            <!-- Dropin Container Braintree -->
            <div class="form-outline mb-4">
                <div id="dropin-container"></div>
                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <input type="submit" value="Invia Pagamento" class="btn btn-primary" />
            </div>
        </form>
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
    
@endsection