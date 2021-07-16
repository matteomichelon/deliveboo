@extends('layouts.app')

@section('content')

    <section class="container">
        
        <div class="jumbotron">

            <h1 class="display-4">{{$restaurant->restaurant_name}}</h1>
            <p class="lead">{{$restaurant->restaurant_address}}</p>
            
            <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Torna indietro</a>

        </div>

    </section>

@endsection