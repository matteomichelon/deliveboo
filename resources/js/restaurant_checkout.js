const { default: axios } = require( "axios" );

var app = new Vue({
    el: '#root',
    data: {
        cart: [],
        cartSend: {},
        cartDisplay: [],
        formData: {
            name : "",
            surname : "",
            address : "",
            telephone_number : "",
            email : "",
            notes : "",
            _token : document.querySelector('meta[name="csrf-token"]').content,
            payment_method_nonce : ''
        },
        restaurantId: localStorage.getItem('RestaurantPaymentId'),
        orderId : ""
    },
    methods: {
        cartProductsDisplay() {                
            let result = [];

            if (this.cart.length > 0) {
                this.cart.forEach(element => {
                    let product_id = element.id;
                    if ( !result.includes(this.cart.find(product => product.id === product_id))) {
                        result.push(element)
                    }
                })
            } else {
                result = [];
            }     

            return this.cartDisplay = result;                                
        },
        countProduct(product_id) {
            let result = this.cart.filter(element => element.id === product_id);
            return result.length;
        },
        calculateProduct(product_id, product_price) {
            let quantity = this.cart.filter(element => element.id === product_id).length;
            let price = product_price * quantity;
            return price.toFixed(2);
        },
        calculateCart() {
            let price = 0;
            for(let i = 0; i < this.cart.length; i++) {
                price += this.cart[i].price;
            }
            return price.toFixed(2);
        },
        sendData() {

            // Form Data
            let data = {
                productIds : this.cartSend,
                restaurantId : this.restaurantId,
                formData : this.formData
            };
            
            // Axios Request
            axios
            .post('/api/cart-data', data)
            .then(response => {
                { data : response.data };
                window.orderId = response.data;
            });
            
            // Form display classes
            let dataForm = document.getElementById("data-form");
            dataForm.classList.add("d-none");

            let paymentForm = document.getElementById('payment-form');
            paymentForm.classList.remove('d-none');
        },
        sendPayment() {

            let data = {
                orderId : this.orderId,
                nonce : document.querySelector('#nonce').value
            };

            alert('ciao');

            axios
            .post('/api/cart-checkout', data)
            .then(response => {
                { data : response.data };
                
            });
        }
    },
    mounted() {
        let RestaurantPaymentData = localStorage.getItem('RestaurantPaymentData');

        this.cart = JSON.parse(RestaurantPaymentData);
        this.cartProductsDisplay();

        // 
        this.cart.forEach(element => {
            this.cartSend[element.id] = this.countProduct(element.id);
        })
    }
})