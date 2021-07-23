@extends('layouts.app')

{{-- Link to Chart.js Cdn --}}
@section('header_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Totale ordini per Anno</h3>
                    </div>
                    <div class="panel-body">

                        {{-- Canvas Node --}}
                        <canvas id="canvas" height="280" width="600"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Totale ordini per Mese</h3>
                    </div>
                    <div class="panel-body">

                        {{-- Month Node --}}
                        <canvas id="month" height="280" width="600"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: year_order
            }]
        };

        /* Month */
        var barChartMonth = {
            labels: month,
            datasets: [{
                label: 'Numero Ordini',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: month_order
            }]
        };

        
        window.onload = function() {
            /* Onload Year */
            let ctx_year = document.getElementById("canvas").getContext("2d");
            let yearChart = new Chart(ctx_year, {
                type: 'bar',
                data: barChartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true
                }
            });

            /* Onload Month */
            let ctx_month = document.getElementById("month").getContext("2d");
            let monthChart = new Chart(ctx_month, {
                type: 'bar',
                data: barChartMonth,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true
                }
            });
        };

    </script>
    {{-- END Script --}}

@endsection
