const { default: axios } = require("axios");

var app = new Vue(
    {
        el: '#root',
        data: {
            categories: []
        },
        methods: {

        },
        mounted() {

            axios
                .get('api/categories')
                .then((response) => {
                    const result = response.data.categories;
                    this.categories = result;                 
                });                
        }
    }
)