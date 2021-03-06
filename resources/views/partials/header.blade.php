<!-- HEADER -->
<header>

    <!-- NAV -->
    <nav>

        <!-- Container Large -->
        <div class="container_large">

            <!-- Nav Left -->
            <div class="nav-left">

                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/logo/DeliveBoo_Logo_Total_Chiaro.svg') }}" alt="logo">
                    </a>
                </div>
                <!-- end Logo -->

            </div>
            <!-- end Nav Left -->

            <!-- Nav Right -->
            <div class="nav-right">

                <!-- Login -->
                <div class="login_register">

                    <ul>

                        <!-- Guest -->
                        @guest
                            <li>
                                <a class="btn-nav" href="{{ route('login') }}">Accedi</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="btn-nav" href="{{ route('register') }}">Registrati</a>
                                </li>
                            @endif
                        @else
                            <!-- end Guest -->

                            <!-- Admin -->
                            <li>
                                <a class="icon" href="{{ route('admin.products.create') }}" data-toggle="tooltip"
                                    title="Aggiungi un nuovo prodotto">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>

                            <li>
                                <a class="icon" href="{{ route('admin.orders') }}" data-toggle="tooltip"
                                    title="Ordini">
                                    <i class="far fa-folder"></i>
                                </a>
                            </li>

                            <li>
                                <a class="icon" href="{{ route('admin.stats') }}" data-toggle="tooltip" title="Vedi le statistiche">
                                    <i class="fas fa-signal"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.home') }}">
                                        Il tuo profilo
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.products.index') }}">
                                        I tuoi prodotti
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.orders') }}">
                                        I tuoi ordini
                                    </a>

                                    <a class="dropdown-item" href="{{ route('admin.stats') }}">
                                        Le tue statistiche
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Esci
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <!-- end Admin -->

                    </ul>

                </div>
                <!-- end Login -->

            </div>
            <!-- end Nav Right -->

    </nav>
    <!-- end NAV -->

</header>
<!-- end HEADER -->
