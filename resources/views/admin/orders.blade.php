@extends('layouts.app')

@section('content')

    <div class="container_medium padding-section">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Codice</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->code }}</th>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->surname }}</td>
                        <td>{{ $order->date }}</td>
                        <td>€{{ $order->price }}</td>
                        @if($order->status == 1)
                            <td style="color: green">Accepted</td>
                        @else
                            <td style="color: red">Pending</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
