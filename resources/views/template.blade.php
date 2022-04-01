<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="{{url('/')}}/estilos.css">
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   

    <title>iDriver | @yield('titulo')</title>
  </head>
  <body class="mt-5 pt-5">

    <nav class="navbar navbar-dark bg-navega fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand logotipo">iDriver</a>
          <a href="#" class="text-white"><i class="fa-solid fa-magnifying-glass fa-2x"></i></a>
          
        </div>
      </nav>

	<!-- Menu -->
	<div id="container">
        <div id="nav-menu">
            <div class="bg"></div>
				<div class="button" tabindex="0">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</div>
			<div id="content-menu" tabindex="0">
			<ul>
                <li><a href="{{route('home')}}"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="{{route('cadastrar-veiculo')}}"><i class="fa-solid fa-car-mirrors"></i> Cadastrar Veículo</a></li>
				<li><a href="{{route('localizar-servicos')}}"><i class="fa-solid fa-map-location-dot"></i> Localizar serviços</a></li>
				<li><a href="{{route('estatisticas')}}"><i class="fas fa-chart-line"></i> Estatísticas</a></li>
				<li><a href="{{route('abastecimento')}}"><i class="fa-solid fa-gas-pump"></i> Abastecimento</a></li>
				<li><a href="{{route('manutencao')}}"><i class="fa-solid fa-wrench"></i> Manutenção</a></li>
                <li><a href="{{route('ajudai')}}"><i class="fa-solid fa-comment-dollar"></i>  Ajudaí</a></li>
				<li><a href="{{route('simulador')}}"><i class="fas fa-lightbulb"></i>  Simulador</a></li>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<!-- Conteúdo -->
                @yield('conteudo')
				
			</div>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
  </body>
</html>