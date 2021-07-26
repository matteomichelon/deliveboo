@extends('layouts.app')

@section('content')


    @foreach ($orders as $order)
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
                <div> {{ $order->code }} </div>
            </div>
        </div>
    @endforeach


@endsection
