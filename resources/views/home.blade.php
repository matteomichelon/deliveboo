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

            <div class="container_medium d-flex justify-content-between align-items-center">

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

                    <img src="{{ asset('img/logo/DeliveBoo_Pittogramma.svg') }}" alt="Duck">

                </div>
                <!-- END Duck box -->

            </div>

        </section>
        <!-- END Jumbotron section -->

        <!-- Category section -->
        <section class="category">

            <div class="container_medium">

                <h2>Scegli tra la nostra selezione</h2>

                <!-- Box category -->
                <div class="container-box d-flex flex-nowrap" >

                    <!-- Single box -->
                    <div class="category-card pe-auto" v-for="category in categories" @click="getCategoryRestaurant(category.id)">

                        <h5 class="category-name"> @{{ category.name }} </h5>
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

                <h2>Risultati della tua ricerca per: "nome_categoria" </h2>

                <!-- Container box -->
                <div class="container-box d-flex flex-wrap">

                    <!-- Single card Restaurant -->
                    <div class="card-restaurant" v-for="restaurant in restaurants">

                        <div class="background-hover">

                            <div class="research-image">
                                <img src="{{ asset('img/pizzeria.png') }}" alt="">
                            </div>

                            <div class="research-details">

                                <h3> @{{ restaurant.name }} </h3>

                                <p> @{{ restaurant.address }} </p>

                            </div>

                        </div>

                    </div>
                    <!-- end Single card Restaurant -->

                </div>
                <!-- end Container box -->

            </div>

        </section>
        <!-- end Research section -->

        <!-- App section -->
        <section class="app">

            <div class="container_medium padding-section">

                <!--box-app-left-->
                <div class="box-app-left">
                    <h2>Scarica la nostra app</h2>
                </div>
                <!--end box-app-left-->
                
                <!--box-app-right-->
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
