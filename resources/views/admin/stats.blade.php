@extends('layouts.app')



@section('content')
    <h1>Sono la home delle statistiche</h1>

    <div id="root">
        <div class="container">
            <button v-on:click="printGraph(ordersByMonth)">Mesi</button>
            <button v-on:click="printGraph(ordersByYear)">Anni</button>
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
                flag: "",
                ordersByMonth: [
                ],
                ordersByYear: [
                ],
                ordersToPrint: [  
                ],
                myChart: "",
                totalEarnings: 0
            },
            methods: {
                printGraph(original) {

                    this.ordersToPrint = [];

                    // make a copy of the input array
                    var copy = original.slice(0);

                    // first loop goes over every element
                    for (var i = 0; i < original.length; i++) {

                        var myCount = 0;	
                        // loop over every element in the copy and see if it's the same
                        for (var w = 0; w < copy.length; w++) {
                            if (original[i] == copy[w]) {
                                // increase amount of times duplicate is found
                                myCount++;
                                // sets item to undefined
                                delete copy[w];
                            }
                        }

                        if (myCount > 0) {

                            if (typeof original[i] == 'string') {
                                key = original[i].charAt(0).toUpperCase() + original[i].slice(1);
                            } else {
                                key = original[i].toString();
                            }
                            

                            var a = new Object();
                            a.x = key;
                            a.y = myCount;
                            
                            this.ordersToPrint.push(a);
                            }
                        }

                        if(this.myChart) {
                            
                            this.myChart.data.labels.pop();
                            this.myChart.data.datasets[0].data.pop();
                            
                            this.myChart.data.datasets[0].data = this.ordersToPrint;
                            this.myChart.update('reset');
                            this.myChart.update('show');
                        }
                    }
            },

            mounted() {
            
                var data = {!!json_encode($data['orders'])!!};
                var dataArray = [];
                Object.keys(data).forEach(function (key){
                    dataArray.push(data[key]);                    
                });
                
                dataArray.forEach(element => {

                    let month = new Date(element['date']);
                    month.getMonth();
                    
                    let options = { month: 'long'};
                    
                    this.ordersByMonth.push(new Intl.DateTimeFormat('it-IT', options).format(month));
                    /* console.log(this.ordersByMonth); */
                    let year = (new Date(element['date']));
                    year = year.getFullYear();
                    this.ordersByYear.push(year);
   
                });

                this.printGraph(this.ordersByMonth);

                var ctx = document.getElementById('canvas');
                this.myChart = new Chart(ctx, {
                // Type sta per il tipo di visualizzazione del grafico. Può essere 'bar' per dei rettangoli, 'line' per una linea ecc.
                type: 'bar',
                // data conterrà le statistiche da rappresentare nel grafico
                data: {
                    // Datasets invece contiene le caratteristiche di ogni dato
                    datasets: [{
                        // Nome grafico
                        label: 'Numeri di ordine',
                        // Questo data contiene le percentuali di un elemento su scala Y
                        data: this.ordersToPrint,
                        // Caratteristiche delle barre
                        backgroundColor: [
                            'rgba( 97, 193, 182, 100%)',
                        ],
                        backdropColor: [
                            'rgba( 243, 172, 79, 100%)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
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
                    scales: {
                        y: {
                            beginAtZero: true
                        },
                        x: {
                                type: 'time',
                                time: {
                                    unit: 'month'
                                }
                            }
                        },                           
                    }
                }
            });
        },
    },
);


</script>


{{-- End Script --}}

@endsection
