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

                <!-- Duck box -->
                <div class="duck-box">

                    <img src="{{ asset('img/logo/DeliveBoo_Logo_Pittogramma.svg') }}" alt="Duck">

                </div>
                <!-- END Duck box -->

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
        <section class="research padding-section">

            <div class="container_large">

                <div class="research-text" v-if="activeCategory">
                    <h2>Risultati della tua ricerca per: @{{ activeCategory }} </h2>
                    <div class="research-text-back" @click="getActiveCategory(''); getAllRestaurants();"><i
                            class="fas fa-arrow-right"></i> Torna indietro</div>
                </div>

                <!-- Show more-less -->
                <div v-if="restaurants.length > 6">
                    <div v-if="limit">
                        <button type="button" class="btn btn-primary" @click="limit = null">Vedi Tutto</button>
                    </div>

                    <div v-else>
                        <button type="button" class="btn btn-secondary" @click="limit = 6">Vedi Meno</button>
                    </div>
                </div>

                <!-- Container box -->
                <div class="container-box d-flex flex-wrap">

                    <!-- Single card Restaurant -->

                    <div class="card-restaurant" v-for="restaurant in restaurantsComputed">

                        <a :href="`restaurant/${restaurant.slug}`">

                            <div class="background-hover">

                                <div class="research-image">
                                    <img :src="restaurant.cover" :alt="'Foto Piatto ' + restaurant.name">
                                </div>

                                <div class="research-details">

                                    <div class="research-details-title"> @{{ restaurant . name }} </div>

                                    <div class="research-details-address"> @{{ restaurant . address }} </div>

                                </div>

                            </div>

                        </a>

                    </div>
                    <!-- end Single card Restaurant -->

                </div>
                <!-- end Container box -->

            </div>

        </section>
        <!-- end Research section -->

        <!-- App section -->
        <section class="app">

            <div class="container_large padding-section">

                <!--box-app-left-->
                <div class="box-app-left">
                    <h2>Scarica la nostra app</h2>
                </div>

                <!--box-app-->
                <div class="box-app-right">
                    <img src="{{ asset('img/app-store-badge.png') }}" alt="App Store Badge">
                    <img src="{{ asset('img/play-store-badge.png') }}" alt="Play Store Badge">
                </div>
                <!--box-app-right-->

            </div>


        </section>
        <!-- end App section -->

    </div>
@endsection
