@extends('template-mapa-rota')

@section('titulo', 'Simulador')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fas fa-lightbulb" style="color: #FED057"></i> Simulador</h2>

                    <nav class="navbar row navbar-dark">
                    
                        <div class="col-md-2 p-1">
                            <a class="navbar-brand" style="color: #FED057">Traçar Rota:</a>
                        </div>
                        <div class="col-md-5 p-1">
                            <input class="form-control" id="origem" name="origem" type="text" placeholder="Origem" aria-label="Origem">
                        </div>
                    
                        <div class="col-md-5 p-1">
                            <input class="form-control" id="destino" name="destino" type="text" placeholder="Destino" aria-label="Destino">
                        </div>
                    </nav>

            
@endsection