const { default: axios } = require( "axios" );

var app = new Vue(
    {
        el: '#root',

        /* DATA */
        data: {
            categories: [],
            restaurants: [],
            limit: 6, // Number you wish to limit to
            activeCategory: ""
        },

        /* COMPUTED */
        computed: {

            restaurantsComputed () {
                
                restaurant_views = this.restaurants;  

                if (this.limit) {
                    restaurant_views = this.restaurants.slice(0, this.limit);
                }

                return restaurant_views;
            }

        },

        /* METHODS */
        methods: {
            getCategoryRestaurant ( categoryId ) {
                axios
                    .get( `api/categories/${ categoryId }` )
                    .then( ( response ) => {
                        const result = response.data.restaurants;
                        this.restaurants = result;
                    } )
            },

            getAllRestaurants () {
                axios
                    .get( 'api/restaurants' )
                    .then( ( response ) => {
                        const result = response.data.restaurants;
                        this.restaurants = result;
                    } );
            },

            getActiveCategory ( categoryName ) {
                this.activeCategory = categoryName;
            },

            scrollRight () {
                document.querySelector( '.container-box' ).scrollBy( {
                    left: 1000,
                    behavior: 'smooth'
                } );
            },

            scrollLeft () {
                document.querySelector( '.container-box' ).scrollBy( {
                    left: -1000,
                    behavior: 'smooth'
                } );
            }

        },

        /* MOUNTED */
        mounted () {
            axios
                .get( 'api/categories' )
                .then( ( response ) => {
                    const result = response.data.categories;
                    this.categories = result;
                } );

            axios
                .get( 'api/restaurants' )
                .then( ( response ) => {
                    const result = response.data.restaurants;
                    this.restaurants = result;
                } );
        }
    }
)