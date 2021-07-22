@extends('layouts.app')



@section('content')
    <h1>Sono la home delle statistiche</h1>

    <div id="root">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <canvas id="canvas" height="450" width="800"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Start Script --}}
    <script>

        var app = new Vue({

            el: '#root',
            data: {
                orders: [],
                prices: [],
                dates: [],
            },

            mounted() {
            
                var data = {!!json_encode($data['orders'])!!};
                var user = {!!json_encode($data['user'])!!};
                console.log(data);
                console.log(user);

                data.forEach(element => {
                    this.prices.push(element['price']);
                    this.dates.push(element['date']);
                });  

                        var ctx = document.getElementById('canvas');
                        var myChart = new Chart(ctx, {
                        // Type sta per il tipo di visualizzazione del grafico. Può essere 'bar' per dei rettangoli, 'line' per una linea ecc.
                        type: 'bar',
                        // data conterrà le statistiche da rappresentare nel grafico
                        data: {
                            // labels è il nome che verrà dato ad ogni elemento 
                            labels: this.dates,
                            // Datasets invece contiene le caratteristiche di ogni dato
                            datasets: [{
                                // Nome grafico
                                label: 'Guadagni per ordine €',
                                // Questo data contiene le percentuali di un elemento su scala Y
                                data: this.prices,
                                // Caratteristiche delle barre
                                backgroundColor: [
                                    'rgba( 97, 193, 182, 100%)',
                                ]
                            }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'bottom',
                                    labels: {
                                    usePointStyle: true,
                                    pointStyle: 'circle',
                                    boxWidth: 4,
                                    boxHeight: 4,
                                    fontColor: 'rgb(60, 180, 100)'
                                    }
                                },
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            
                        }
                    });
                }
            },
        );


    </script>


    {{-- End Script --}}

@endsection
