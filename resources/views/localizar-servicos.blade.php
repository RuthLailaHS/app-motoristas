@extends('template-mapa-rota')

@section('titulo', 'Localizar Serviços')

@section('conteudo')

<h2 class="text-center mb-4" style="color: white"><i class="fa-solid fa-map-location-dot" style="color: #FED057"></i> Localizar Serviços</h2>

                  <nav class="navbar row navbar-dark">
                    
                        <div class="col-md-2 p-1">
                            <a class="navbar-brand">Traçar rota</a>
                        </div>
                        <div class="col-md-5 p-1">
                            <input class="form-control" id="origem" name="origem" type="text" placeholder="Origem" aria-label="Origem">
                        </div>
                    
                        <div class="col-md-5 p-1">
                            <input class="form-control" id="destino" name="destino" type="text" placeholder="Destino" aria-label="Destino">
                        </div>
                  </nav>

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

                <div id="map" style="height: 100%;"></div>
				
@endsection