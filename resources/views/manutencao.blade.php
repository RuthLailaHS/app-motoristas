@extends('template')

@section('titulo', 'Manutenção')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-wrench"></i></a> Manutenção</h2>
				
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
<h3 class="text-white">A basic HTML table</h3>
<br>

<table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

</body>
</html>
@endsection