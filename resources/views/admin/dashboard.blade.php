@extends('layouts.app')

@section('content')
<div class="container_large">
    <div class="d-flex justify-content-lg-center flex-wrap">
        <div class="col-md-8 margin-form-dashboard">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="d-flex flex-row align-items-stretch">
                
                <div class="d-flex flex-column mt-3">
                    <div class="d-flex flex-column align-items-center p-2">
                      {{-- <h5 class="card-title">Lista Prodotti</h5> --}}
                      <img src="{{ asset('img/fast-food.png') }}" alt="list-icon" class="mb-2 auto" style="width: 55px">
                      <p class="card-text text-center">Lista di tutti i piatti presenti nel ristorante nel dettaglio con possibilità di modifica e cancellazione.</p>
                      <a href="{{route('admin.products.index')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Tutti i prodotti</a>
                    </div>
                </div>

                <div class="d-flex flex-column mt-3">
                    <div class="d-flex flex-column align-items-center p-2">
                      {{-- <h5 class="card-title">Nuovo Prodotto</h5> --}}
                      <img src="{{ asset('img/adding.png') }}" alt="list-icon" class="mb-2 auto" style="width: 55px">
                      <p class="card-text text-center">Possibilità di aggiungere un nuovo prodotto al tuo ristorante.</p>
                      <a href="{{route('admin.products.create')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Crea nuovo prodotto</a>
                    </div>
                </div>

                <div class="d-flex flex-column mt-3">
                    <div class="d-flex flex-column align-items-center p-2">
                      {{-- <h5 class="card-title">Statistiche</h5> --}}
                      <img src="{{ asset('img/stats.png') }}" alt="list-icon" class="mb-2 auto" style="width: 55px">
                      <p class="card-text text-center">Visualizzazione delle Statistiche annuali e mensili degli ordini ricevuti.</p>
                      <a href="{{route('admin.stats')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Visualizza statistiche</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
