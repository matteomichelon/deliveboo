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
            addProduct(index) {                
                this.cart.push(this.products[index]);                                
                this.refreshStorage();
            },
            removeProduct(product_id) {
                let index = this.cart.indexOf(this.cart.find(element => element.id === product_id));
                if (this.cart.includes(this.cart.find(element => element.id === product_id))) {
                    this.cart.splice(index, 1); 
                } 
                this.refreshStorage();          
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
            refreshStorage() {
                localStorage.setItem(restaurant_id, JSON.stringify(this.cart));               
            },
            getRestaurantPaymentData() {
                localStorage.setItem('RestaurantPaymentData', JSON.stringify(this.cart));
                localStorage.setItem('RestaurantPaymentId', restaurant_id);
            }            
        },
        mounted() {

            this.products = window.restaurant_products;
            

            // +-----------------------------------------------+
            // | Controllo ristorante.id per il local storage. |
            // +-----------------------------------------------+

            let cart = JSON.parse(localStorage.getItem(restaurant_id));

            if (cart.length > 0) {
                this.cart = cart;
                this.cartProductsDisplay();
            }
        }
    }
)