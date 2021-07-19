@extends('layouts.app')

@section('header_scripts')
    <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.js"></script>
@endsection

@section('content')

    <section class="cart">

        <div class="container-cart-right">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="page-header">
                <h1>Infomazioni per la spedizione</h1>
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
                    <label class="form-label" for="note">Note per il Rider</label>
                    <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                </div>

                <!-- Dropin Container Braintree -->
                <div class="form-outline mb-4">
                    <div id="dropin-container"></div>
                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                    <input type="submit" value="Invia Pagamento" class="btn btn-primary" />
                </div>
            </form>
        </div>

        <div class="container-cart-left">

            <div class="inner-cart">

                <div class="title">
                    <h4>Carrello</h4>
                </div>

                <div class="orders">
                    <span>1x</span> <span>Prodotto Selezionato</span>
                </div>

                <div class="purchase">
                    <div class="subtotal">Subtotale:</div>
                    <div class="subtotal-price">5,00€</div>
                    <div class="surplus">Supplemento</div>
                    <div class="surplus-price">2,00€</div>
                    <div class="delivery">Spese di consegna</div>
                    <div class="delivery-price">€2,00</div>
                </div>

                <div class="total">
                    <div class="total">Totale:</div>
                    <div class="totle-price">9€</div>
                </div>

            </div>
        </div>

    </section>

    <!-- Script Start -->
    <script>
        /* Variables */
        const form = document.querySelector('#payment-form');
        const clientToken = "{{ $clientToken }}";

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
