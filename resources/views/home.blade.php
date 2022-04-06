@extends('template-mapa-rota')

@section('titulo', 'Home')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-house" style="color: #FED057"></i> Home</h2>
				<div id="chart_div" class="mb-3"></div>
				<script type="text/javascript">
					//LARGURA DA JANELA
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
						['Lava-rápido', 1],
						['Km rodados', 2],
					  ]);
			  
					  // Set chart options
					  var options = {'title':'Atualização de gastos',
									 'width':largura,
									 'height':300};
			  
					  // Instantiate and draw our chart, passing in some options.
					  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
					  chart.draw(data, options);
					}
				  </script>
				
				<p class="m-0 text-white">Status Tanque de combutível do veículo</p>
				<div class="progress mb-3">
					<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
				
@endsection