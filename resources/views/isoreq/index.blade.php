@extends('adminlte::page')

@section('title', 'ISOREQUERIMIENTOS')

@section('content_header')
	<h1>ISOREQUERIMIENTOS</h1>
@stop

@section('content')
	<p>Welcome to this beautiful admin panel.</p>
    <table class="table table-dark table-striped tabla_azul">
		<th colspan="13"> Diagrama de Isorequerimientos</th>
		<tr>
			<th colspan="2">Localidad</th>
			<td colspan="2">Hermosillo Son</td>
			<th colspan="2">Latitud</th>
			<td>19.7</td>
			<th colspan="2">Longitud</th>
			<td>-110.46</td>
			<th colspan="2">Altitud</th>
			<td>34.6</td>

		</tr>
		<tr>
			<th>Hora</th>
			<th>Ene</th>
			<th>Feb</th>
			<th>Mar</th>
			<th>Abr</th>
			<th>May</th>
			<th>Jun</th>
			<th>Jul</th>
			<th>Ago</th>
			<th>Sept</th>
			<th>Oct</th>
			<th>Nov</th>
			<th>Dic</th>
		</tr>

		<tr>
		    <th></th>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop