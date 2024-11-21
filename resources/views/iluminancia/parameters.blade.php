@extends('adminlte::page')

@section('title', 'REGISTROS POR MES ')

@section('content_header')
	<h1>CALCULOS DE ILUMINANCIA POR MES</h1>
@stop

@section('content')
	<p>Welcome to this beautiful admin panel.</p>
   
    <div class="table-responsive">
	<table id="dataTable" class="display table table-dark table-striped tabla_azul">
        <thead>
            <tr>
                @if ($registros->isNotEmpty())
                    {{-- Generar los encabezados dinámicamente --}}
                    @foreach (array_keys($registros->first()->toArray()) as $columna)
                        <th>{{ $columna }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            {{-- Generar las filas dinámicamente --}}
            @foreach ($registros as $registro)
                <tr>
				   @foreach ($registro->toArray() as $key => $valor)
                        <td class="data-cell" data-column="{{ $key }}" data-value="{{ $valor }}">
                            {{ $valor }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .gradient-cell {
            color: white;
            font-weight: bold;
        }
    </style>
@stop

@section('js')
	<script> console.log('Hi!'); </script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                pageLength: 10
            });

            // Calcular el valor mínimo y máximo por columna
            var minMaxValues = {};
            $('.data-cell').each(function() {
                var column = $(this).data('column');
                var value = parseFloat($(this).data('value'));
                if (!minMaxValues[column]) {
                    minMaxValues[column] = { min: value, max: value };
                } else {
                    if (value < minMaxValues[column].min) minMaxValues[column].min = value;
                    if (value > minMaxValues[column].max) minMaxValues[column].max = value;
                }
            });

            // Aplicar el color gradiente a las celdas (excepto la columna de la hora)
            $('.data-cell').each(function() {
                var column = $(this).data('column');
                var value = parseFloat($(this).data('value'));
                var min = minMaxValues[column].min;
                var max = minMaxValues[column].max;

                // Excluir la columna de la hora (por ejemplo, si es 'hora')
                if (column !== 'hora') {
                    var percentage = (value - min) / (max - min);
                    var color = getGradientColor(percentage); // Función para obtener el color basado en el valor
                    $(this).css('background-color', color);
                    $(this).addClass('gradient-cell');
                }
            });

            // Inicializar DataTables
            table.draw();
        });

        // Función para calcular el color basado en el porcentaje (de azul a rojo)
        function getGradientColor(percentage) {
            var r = Math.min(255, Math.max(0, Math.round(255 * percentage)));
            var b = Math.min(255, Math.max(0, Math.round(255 * (1 - percentage))));
            return 'rgb(' + r + ', 0, ' + b + ')';
        }
    </script>
@stop