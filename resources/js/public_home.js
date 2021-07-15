const { default: axios } = require("axios");

var app = new Vue(
    {
        el: '#root',
        data: {
            categories: [],
            restaurants: []
        },
        methods: {
            getCategoryRestaurant(categoryId) {                
                axios
                    .get(`api/categories/${categoryId}`)
                    .then((response) => {
                        const result = response.data.restaurants;
                        this.restaurants = result;                        
                    })
            }
        },
        mounted() {
            axios
                .get('api/categories')
                .then((response) => {
                    const result = response.data.categories;
                    this.categories = result;                 
                });
            
            axios
            .get('api/restaurants')
            .then((response) => {
                const result = response.data.restaurants;
                this.restaurants = result;                 
            }); 
        }
    }
)