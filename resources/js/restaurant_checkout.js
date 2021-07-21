const { default: axios } = require( "axios" );

var app = new Vue({
    el: '#root',
    data: {
        cart: [],
        cartDisplay: []
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
        }
    },
    mounted() {
        let RestaurantPaymentData = localStorage.getItem('RestaurantPaymentData');
        let RestaurantPaymentId = localStorage.getItem('RestaurantPaymentId');

        this.cart = JSON.parse(RestaurantPaymentData);
        this.cartProductsDisplay();
        console.log(this.cartDisplay);
    }
})