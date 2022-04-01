@extends('template')

@section('titulo', 'Estatísticas')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fas fa-chart-line"></i> Estatísticas</h2>
                <!-- //CARREGAMENTO DO PRIMEIRO GRÁFICO -->
				<div id="chart_div" class="mb-3"></div>
				<script type="text/javascript">
                    (function(){
                        //Largura da janela
                        var propriedades = document.getElementById('chart_div').getBoundingClientRect();
                        var largura = propriedades.width;

                        // Load the Visualization API and the corechart package.
                        google.charts.load('current', {'packages':['corechart']});
                
                        // Set a callback to run when the Google Visualization API is loaded.
                        google.charts.setOnLoadCallback(drawChart);
                
                        // Callback that creates and populates a data table,
                        // instantiates the pie chart, passes in the data and
                        // draws it.
                        function drawChart() {
                
                        // Create the data table.
                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'Topping');
                        data.addColumn('number', 'Slices');
                        data.addRows([
                            ['Combustível', 3],
                            ['Manutenção', 1],
                            ['Km rodados', 2],
                            ['Lava-rápido', 1],                         
                        ]);
                
                        // Set chart options
                        var options = {'title':'Atualização de gastos',
                                        'width':largura,
                                        'height':300};
                
                        // Instantiate and draw our chart, passing in some options.
                        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                        }
                    })();
					
				  </script>
				
				<p class="m-0 text-white">Status Tanque do veículo</p>
				<div class="progress mb-3">
					<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
				
				<!-- //CARREGAMENTO DO SEGUNDO GRÁFICO -->
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