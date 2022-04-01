@extends('template')

@section('titulo', 'Home')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-house"></i> Home</h2>
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
				
				<p class="m-0 text-white">Combustível</p>
				<div class="progress mb-3">
					<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
				
				<!-- CARREGAR DINAMICAMENTE UM MAPA -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7168512399376!2d-45.861094885029395!3d-23.180532184873318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc8557f3105%3A0x26bc31b7142cc60f!2sR.%20Saigiro%20Nakamura%2C%20400%20-%20Vila%20Industrial%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220-280!5e0!3m2!1spt-BR!2sbr!4v1648477671025!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                

@endsection