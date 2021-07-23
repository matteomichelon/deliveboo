@extends('layouts.app')

{{-- Link to Chart.js Cdn --}}
@section('header_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
@endsection

@section('content')

    <section class="container padding-section">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="mt-5 mb-1">Totale ordini per Anno</h2>
                    </div>
                    <div class="panel-body">

                        {{-- Year Node --}}
                        <canvas id="year" height="280" width="600"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container padding-section">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="mt-5 mb-1">Totale ordini per Mese Anno corrente</h2>
                    </div>
                    <div class="panel-body mb-5">

                        {{-- Month Node --}}
                        <canvas id="month" height="280" width="600"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- START Script --}}
    <script>
        var year = @php echo $year; @endphp;
        var year_order = @php echo $year_order; @endphp;
        var month = @php echo $month @endphp;
        var month_order = @php echo $month_order @endphp;

        /* Year */
        var barChartData = {
            labels: year,
            datasets: [{
                label: 'Numero Ordini',
                backgroundColor: 'rgba(255, 159, 28, 0.2)',
                borderColor: 'rgba(46, 196, 182, 0.4)',
                borderWidth: 2,
                data: year_order
            }]
        };

        /* Month */
        var barChartMonth = {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre',
                'Ottobre', 'Novembre', 'Dicembre'
            ],
            datasets: [{
                label: 'Numero Ordini',
                backgroundColor: 'rgba(255, 159, 28, 0.2)',
                borderColor: 'rgba(46, 196, 182, 0.4)',
                borderWidth: 2,
                data: month_order
            }]
        };

        window.onload = function() {
            /* Onload Year */
            let ctx_year = document.getElementById("year").getContext("2d");
            let yearChart = new Chart(ctx_year, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },

                }
            });

            /* Onload Month */
            let ctx_month = document.getElementById("month").getContext("2d");
            let monthChart = new Chart(ctx_month, {
                // Type sta per il tipo di visualizzazione del grafico. Può essere 'bar' per dei rettangoli, 'line' per una linea ecc.
                type: 'bar',
                // data conterrà le statistiche da rappresentare nel grafico
                data: barChartMonth,
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },

                }
            });
        };
    </script>
    {{-- END Script --}}

@endsection
