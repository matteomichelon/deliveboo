@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 margin-form-dashboard">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="dashboard-card">
                    <div class="card-body">
                      <h5 class="card-title">Lista Prodotti</h5>
                      <p class="card-text">Lista di tutti i piatti presenti nel ristorante nel dettaglio con possibilità di modifica e cancellazione. </p>
                      <a href="{{route('admin.products.index')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Tutti i prodotti</a>
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="card-body">
                      <h5 class="card-title">Nuovo Prodotto</h5>
                      <p class="card-text">Possibilità di aggiungere un nuovo prodotto al tuo ristorante.</p>
                      <a href="{{route('admin.products.create')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Crea nuovo prodotto</a>
                    </div>
                </div>

                <div class="dashboard-card">
                    <div class="card-body">
                      <h5 class="card-title">Statistiche</h5>
                      <p class="card-text">Visualizzazione delle Statistiche annuali e mensili degli ordini ricevuti.</p>
                      <a href="{{route('admin.stats')}}" class="btn-deliveboo-secondary text-decoration-none text-white">Visualizza statistiche</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
