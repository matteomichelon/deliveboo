const { default: axios } = require( "axios" );
const { TimeScale } = require( "chart.js" );

var app = new Vue( {
    el: '#root',
    data: {
        cart: [],
        cartSend: {},
        cartDisplay: [],
        formData: {
            name: null,
            surname: null,
            address: null,
            telephone_number: null,
            email: null,
            notes: null,
            _token: document.querySelector( 'meta[name="csrf-token"]' ).content,
            payment_method_nonce: '',
        },
        errorArrayValidation: [],
        restaurantId: localStorage.getItem( 'RestaurantPaymentId' ),
        orderId: "",
        paymentSuccess: false,
        paymentFail: false
    },
    methods: {
        cartProductsDisplay () {
            let result = [];

            if ( this.cart.length > 0 ) {
                this.cart.forEach( element => {
                    let product_id = element.id;
                    if ( !result.includes( this.cart.find( product => product.id === product_id ) ) ) {
                        result.push( element )
                    }
                } )
            } else {
                result = [];
            }

            return this.cartDisplay = result;
        },
        countProduct ( product_id ) {
            let result = this.cart.filter( element => element.id === product_id );
            return result.length;
        },
        calculateProduct ( product_id, product_price ) {
            let quantity = this.cart.filter( element => element.id === product_id ).length;
            let price = product_price * quantity;
            return price.toFixed( 2 );
        },
        calculateCart () {
            let price = 0;
            for ( let i = 0; i < this.cart.length; i++ ) {
                price += this.cart[ i ].price;
            }
            return price.toFixed( 2 );
        },
        sendData () {

            /* Validation */

            if (
                this.formData.name &&
                this.formData.surname &&
                this.formData.address &&
                this.formData.telephone_number &&
                this.formData.email ) {

                this.errorArrayValidation = []

                // Form Data
                let data = {
                    productIds: this.cartSend,
                    restaurantId: this.restaurantId,
                    formData: this.formData
                };

                // Axios Request
                axios
                    .post( './api/cart-data', data )
                    .then( response => {
                        { data: response.data };
                        this.orderId = response.data;
                    } );

                // Form display classes
                let dataForm = document.getElementById( "data-form" );
                dataForm.classList.add( "d-none" );

                let paymentForm = document.getElementById( 'payment-form' );
                paymentForm.classList.remove( 'd-none' );

                this.createBraintree();

            } else {
                this.errorArrayValidation = []
                if ( !this.formData.name ) {
                    this.errorArrayValidation.push( "Inserisci il campo nome" )
                }
                if ( !this.formData.surname ) {
                    this.errorArrayValidation.push( "Inserisci il campo cognome" )
                }
                if ( !this.formData.address ) {
                    this.errorArrayValidation.push( "Inserisci il campo indirizzo" )
                }
                if ( !this.formData.telephone_number ) {
                    this.errorArrayValidation.push( "Inserisci il campo numero di telefono" )
                }
                if ( !this.formData.email ) {
                    this.errorArrayValidation.push( "Inserisci il campo email" )
                }

            }


        },
        createBraintree () {
            /* Braintree Create */
            braintree.dropin.create( {
                authorization: clientToken,
                container: '#dropin-container'
            },

                /* Add Event Listener */
                ( error, dropinInstance ) => {
                    form.addEventListener( 'submit',

                        /* Request Payment Method */
                        ( event ) => {
                            event.preventDefault();
                            dropinInstance.requestPaymentMethod(

                                /* Find Error */
                                ( error, payload ) => {
                                    console.log( payload );
                                    if ( error ) {
                                        console.log( 'Request Payment Method Error', error );
                                        return;
                                    }

                                    /* Nonce query */
                                    document.querySelector( '#nonce' ).value = payload.nonce;
                                    let data = {
                                        orderId: this.orderId,
                                        nonce: document.querySelector( '#nonce' ).value
                                    };

                                    axios
                                        .post( '/api/cart-checkout', data )
                                        .then( response => {
                                            { data: response.data };
                                            if ( response.data == true ) {
                                                this.paymentSuccess = true;
                                                console.log( this.paymentSuccess );
                                            } else {
                                                this.paymentFail = true;
                                            }
                                        } );
                                } );
                        } );
                } );
        }
    },
    mounted () {
        let RestaurantPaymentData = localStorage.getItem( 'RestaurantPaymentData' );

        this.cart = JSON.parse( RestaurantPaymentData );
        this.cartProductsDisplay();

        // 
        this.cart.forEach( element => {
            this.cartSend[ element.id ] = this.countProduct( element.id );
        } )
    }
} )