const { default: axios } = require( "axios" );

var app = new Vue(
    {
        el: '#root',
        data: {
            products: [],
            cart: [],
            cartDisplay: []
        },
        methods: {
            cartProductsDisplay() {
                let result = [];
                this.cart.forEach(element => {
                    if ( !result.includes(element)) {
                        result.push(element)
                    }
                });

                return this.cartDisplay = result;
            },
            countProduct(product_id) {
                let result = this.cart.filter(element => element.id === product_id);
                console.log(result.length);
                return result.length;
            },
            addProduct(index) {
                this.cart.push(this.products[index]);
            },
            removeProduct(product_id) {
                index = this.cart.find ( element => element.id === product_id);
                this.cart.splice(index, 1);                
            },
            calculateCart() {
                for(let i = 0; i < this.cart.length; i++) {
                    // console.log(this.cart[i]);
                }
            }
        },
        mounted() {

            this.products = window.restaurant_products;

            this.products.forEach(element => {
                element.count = 0;
            });

            console.log(this.products);
            console.log(this.cart);
            console.log(this.cartDisplay);
        }
    }
)