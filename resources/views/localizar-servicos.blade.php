@extends('template')

@section('titulo', 'Localizar Serviços')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-map-location-dot"></i> Localizar Serviços</h2>
                <p>
                    <a class="btn" style="background-color:#FED057; color:#fff" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Selecione o serviço
                    </a>
                  </p>
                  <div class="collapse mb-3" id="collapseExample">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Postos de combustível</li>
                            <li class="list-group-item">Mecânicos</li>
                            <li class="list-group-item">Lava-rápido</li>
                            <li class="list-group-item">Borracheiros</li>
                            <li class="list-group-item">Guinchos</li>
                          </ul>
                    </div>
                  </div>

            <!-- CARREGAR DINAMICAMENTE UM MAPA -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7168512399376!2d-45.861094885029395!3d-23.180532184873318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc8557f3105%3A0x26bc31b7142cc60f!2sR.%20Saigiro%20Nakamura%2C%20400%20-%20Vila%20Industrial%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220-280!5e0!3m2!1spt-BR!2sbr!4v1648477671025!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                  <nav class="navbar fixed-top navbar-dark">
        <div class="col-md-7 offset-md-2 d-flex justify-content-around">
            <div class="col p-1">
                <a class="navbar-brand">Traçar rota</a>
            </div>
            <div class="col p-1">
                <input class="form-control" id="origem" name="origem" type="text" placeholder="Origem" aria-label="Origem">
            </div>
            <div class="col p-1">
                <input class="form-control" id="destino" name="destino" type="text" placeholder="Destino" aria-label="Destino">
            </div>
        </div>
    </nav>
    <div id="map" style="height: 100%;"></div>
				

@endsection