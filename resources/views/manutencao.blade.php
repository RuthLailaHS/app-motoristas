@extends('template')

@section('titulo', 'Manutenção')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-wrench" style="color: #FED057"></i></a> Manutenção</h2>
				
<!DOCTYPE html>
<html>
<style>
    table, th, td {
      border: 2px solid black;
      background-color: #fff;
    }
    </style>
    <body>

    <br>
    <h3 class="text-white">Histórico de manutenção</h3>
    <br>

    <table style="width:100%">
      <!-- Título -->
      <tr>
        <th>Tipo</th>
        <th>Data</th>
        <th>Custo</th>
      </tr>
      <!-- Primeira linha tabela -->
      <tr>
        <td>Pneus</td>
        <td>02/04/2022</td>
        <td>R$1095,40</td>
      </tr>
      <!-- Segunda linha tabela -->
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>

</body>
</html>

@endsection