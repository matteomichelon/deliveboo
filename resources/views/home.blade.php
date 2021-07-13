@extends('layouts.app')

@section('content')

<!--Jumbotron section-->

<section class="jumbotron_main">

    <div class="container_large">

        <!--advertising box -->
        <div class="advertising">

            <h2>Affamato? <br>
                Ci pensiamo noi a portarti a casa <br>
                i cibi che più ami.
            </h2>

        </div>

        <!--duck box -->
        <div class="duck-box">

            <img src="{{asset('img/duck-test.jpg')}}" alt="duck">

        </div>

    </div>

</section>
@endsection
