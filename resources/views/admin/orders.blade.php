@extends('layouts.app')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Codice</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Data</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->code }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->surname }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
