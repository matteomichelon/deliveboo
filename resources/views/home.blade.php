@extends('layouts.app')

{{-- Link to Vue Cdn --}}
@section('header_scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

{{-- Link to script for this page --}}
@section('footer_scripts')
    <script src="{{ asset('js/public_home.js') }}"></script>
@endsection


@section('content')
    <div id="root">

        <!--Jumbotron section-->
        <section class="jumbotron_main">

            <div class="container_large d-flex justify-content-between align-items-center">

                <!-- Advertising box -->
                <div class="advertising">

                    <h1>Affamato? <br>
                        Ci pensiamo noi a portarti a casa <br>
                        i cibi che più ami.
                    </h1>

                </div>
                <!-- END Advertising box -->

            </div>

        </section>
        <!-- END Jumbotron section -->

        <!-- Category section -->
        <section class="category">

            <div class="container_medium">

                <div class="chevron-right">
                    <i class="fas fa-chevron-right" @click="scrollRight()"></i>
                </div>

                <div class="chevron-left">
                    <i class="fas fa-chevron-left" @click="scrollLeft()"></i>
                </div>

                <!-- Box category -->
                <div class="container-box d-flex flex-nowrap">

                    <!-- Single box -->
                    <div class="category-card pe-auto" v-for="category in categories"
                        @click="getCategoryRestaurant(category.id); getActiveCategory(category.name);">

                        <h5 class="category-name"> @{{ category . name }} </h5>
                        <img class="img-fluid" :src="category.cover" :alt="'Immagine piatto: ' + category.name">

                    </div>
                    <!-- end Single box -->

                </div>
                <!-- end Box category -->


            </div>

        </section>
        <!-- end Category section -->

        <!-- Research section -->
        <section class="research">

            <div class="container_large container">

                <div class="research-text" v-if="activeCategory">
                    <h2>Risultati della tua ricerca per: @{{ activeCategory }} </h2>
                    <div class="research-text-back" @click="getActiveCategory(''); getAllRestaurants();"><i
                            class="fas fa-arrow-right"></i>Torna indietro</div>
                </div>

                <!-- Container box -->
                <div class="container-box row d-flex justify-content-around flex-wrap">

                    <!-- Single card Restaurant -->

                    <div class="card-restaurant col-md-4 col-sm-12" v-for="restaurant in restaurantsComputed">

                        <a :href="`restaurant/${restaurant.slug}`">

                            <div class="background-hover">

                                <img v-if='restaurant.path_load_image' :src="'storage/' + restaurant.cover"
                                    :alt="'Foto Piatto ' + restaurant.name">

                                <img v-else :src="restaurant.cover" :alt="'Foto Piatto ' + restaurant.name">

                                <div class="research-details">

                                    <div class="research-details-title"> @{{ restaurant.name }} </div>

                                    <div class="research-details-address"> @{{ restaurant.address }} </div>

                                </div>

                            </div>

                        </a>

                    </div>
                    <!-- end Single card Restaurant -->

                </div>
                <!-- end Container box -->

                <!-- Show more-less -->
                <div class="research-more" v-if="restaurants.length > 6">
                    <div v-if="limit">
                        <button type="button" class="research-text-more" @click="limit = null">Mostra tutto</button>
                    </div>

                    <div v-else>
                        <button type="button" class="research-text-more" @click="limit = 6">Mostra meno</button>
                    </div>
                </div>

            </div>

        </section>
        <!-- end Research section -->

    </div>
@endsection
