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

                if (this.cart.length > 0) {

                    this.cart.forEach(element => {
                        if ( !result.includes(element)) {
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
            addProduct(index) {
                this.cart.push(this.products[index]);
            },
            removeProduct(product_id) {
                let index = this.cart.indexOf(this.cart.find(element => element.id === product_id));
                if (this.cart.includes(this.cart.find(element => element.id === product_id))) {
                    this.cart.splice(index, 1); 
                }               
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

            this.products = window.restaurant_products;

            this.products.forEach(element => {
                element.count = 0;
            });

            // console.log(this.products);
            // console.log(this.cart);
            // console.log(this.cartDisplay);
        }
    }
)