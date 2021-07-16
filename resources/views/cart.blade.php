@extends('layouts.app')

@section('header_scripts')
    <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.js"></script>
@endsection

@section('content')

    <div class="container_medium">

        <h1>Infomazioni per la spedizione</h1>

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
                <label class="form-label" for="telephon_number">Numero di telefono</label>
                <input type="text" id="telephon_number" name="telephon_number" class="form-control" />
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

    <script >
        const form = document.querySelector('#payment-form');
        const clientToken = "{{ $clientToken }}";

        braintree.dropin.create({
                authorization: clientToken,
                container: '#dropin-container'
            },
            /* First Function */
            function(error, dropinInstance) {
                form.addEventListener('submit',
                    /* Second Function */
                    function(event) {
                        event.preventDefault();
                        dropinInstance.requestPaymentMethod(
                            /* Third Function */
                            function(error, payload) {
                                if (error) {
                                    console.log('Request Payment Method Error', error);
                                    return;
                                }
                                // Add the nonce to the form and submit
                                document.querySelector('#nonce').value = payload.nonce;
                                form.submit();
                            });
                    });

            });
    </script>

@endsection
