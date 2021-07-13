@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="{{route('admin.products.index')}}">Lista prodotti</a>
                <a href="{{route('admin.products.create')}}">Crea nuovo prodotto</a>
            </div>
        </div>
    </div>
</div>
@endsection
