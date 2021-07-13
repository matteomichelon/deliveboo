<header>
        <nav>
            <div class="container_large">

                <div class="nav-left">

                    <div class="logo">

                        <a href="{{ url('/') }}">
                            <img src="{{asset('img/logo-test-2.png')}}" alt="logo">
                        </a>
                    </div>
                    
                </div>

                <div class="nav-right">

                    <div class="login_register">
                        <ul>
                            @guest
                                <li>
                                    <a class="btn-nav" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="btn-nav" href="{{ route('register') }}">Registrati</a>
                                    </li>
                                @endif
                                @else


                                <a href="{{route('admin.products.create')}}">Aggiungi un nuovo prodotto</a>
                                
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        
                    </div>
                </div>
                
            

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul>
                        Authentication Links 
                        @guest
                            <li>
                                <a class="btn-nav" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="btn-nav" href="{{ route('register') }}">Registrati</a>
                                </li>
                            @endif
                            @else


                            <a href="{{route('admin.products.create')}}">Aggiungi un nuovo prodotto</a>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> 
                </div>  -->
            </div>
        </nav>
</header>
