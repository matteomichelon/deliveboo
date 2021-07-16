const { default: axios } = require("axios");

var app = new Vue(
    {
        el: '#root',
        data: {
            categories: [],
            restaurants: [],
            activeCategory: "" 
        },
        methods: {
            getCategoryRestaurant(categoryId) {                
                axios
                    .get(`api/categories/${categoryId}`)
                    .then((response) => {
                        const result = response.data.restaurants;
                        this.restaurants = result;
                    })
            },

            getAllRestaurants() {
                axios
                .get('api/restaurants')
                .then((response) => {
                    const result = response.data.restaurants;
                    this.restaurants = result;                 
                }); 
            },

            getActiveCategory(categoryName) {
                this.activeCategory = categoryName;
            },

            scrollRight () {
                document.querySelector('.container-box').scrollBy({                    
                    left: 1000,
                    behavior: 'smooth'
                  });
            },

            scrollLeft () {
                document.querySelector('.container-box').scrollBy({                    
                    left: -1000,
                    behavior: 'smooth'
                  });
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