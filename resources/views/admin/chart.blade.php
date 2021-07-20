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

    {{-- START Script --}}
    <script>

        var year = @php echo $year; @endphp;
        var order = @php echo $order; @endphp;
        var barChartData = {
            labels: year,
            datasets: [{
                label: 'Numero Ordini',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: order
            }]
        };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            var myChart = new Chart(ctx, {
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
        };

    </script>
    {{-- END Script --}}
    
@endsection
