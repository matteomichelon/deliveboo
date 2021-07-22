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
        window.restaurant_id = {{ $id }}

        new Vue({

            el: '#root',
            data: {
                orders: [],
                prices: [],
                dates: [],
            },

            methods: {
                
            },

            mounted() {               
                axios
                    .get(`http://127.0.0.1:8000/api/stats/${window.restaurant_id}`)
                    .then(( result ) => {
                        console.log(result.data);
                        this.orders = result.data.orders;
                        // Ciclo per prendere ogni singolo prezzo
                        this.orders.forEach(element => {
                            this.prices.push(element.price);
                            this.dates.push(element.date);
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
                                    'rgba(255, 99, 132, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                ],
                                borderWidth: 2,
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
                    })
            },
        });


    </script>


    {{-- End Script --}}

@endsection
