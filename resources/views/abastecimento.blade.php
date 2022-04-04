@extends('template')

@section('titulo', 'Abastecimento')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-gas-pump"></i></a> Abastecimento</h2>
				
                <br>
                <p class="m-0 text-white">Status Tanque do veículo</p>
				<div class="progress mb-3">
					<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
                <br>

                <p class="m-0 text-white">Evolução de gastos</p>
                <div id="chart_gastos"></div>
                <script>
                    (function(){
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Quinzena', 'Combustível', 'Manutenção', 'Km rodados', 'Lava-rápidos'],
                            ['01/01',   400,        85,         254,            30],
                            ['16/01',   200,        100,        120,            0],
                            ['01/02',   480,        0,          200,            30],
                            ['16/02',   200,        0,          450,            15],
                            ['01/03',   400,        20,         130,            0],
                            ['16/03',   150,        65,         456,            60]
                            ]);

                            var options = {
                            title: 'Gastos quinzenal do veículo',
                            hAxis: {title: 'Mês',  titleTextStyle: {color: '#333'}},
                            vAxis: {minValue: 0},
                            height: 400
                            };

                            var chart = new google.visualization.AreaChart(document.getElementById('chart_gastos'));
                            chart.draw(data, options);
                        }
                    })();

                    
                </script>

@endsection