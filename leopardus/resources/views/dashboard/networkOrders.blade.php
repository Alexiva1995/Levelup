@extends('layouts.dashboard')

@section('content')
{{-- option datatable --}}
@include('dashboard.componentView.optionDatatable')

{{-- formulario de fecha  --}}
@include('dashboard.componentView.formSearch', ['route' => 'buscarnetworkorder', 'name1' => 'fecha1', 'name2' => 'fecha2', 'text1' => 'Fecha Desde', 'text1' => 'Fecha Hasta', 'type' => 'date'])

<div class="card no-border">
	<div class="card-content">
		<div class="card-body pl-0 pr-0">
			<div class="table-responsive">
				<table id="mytable" class="table zero-configuration cell-border">
					<thead>
						<tr>
							<th>Numero de Orden</th>
							<th>Usuario</th>
							<th>Fecha</th>
							<th>Concepto</th>
							<th>Total</th>
							<th>Generacion</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						@php
						$cont = 0;
						@endphp
						@foreach ($compras as $compra)
						@php
						$cont++;
						$cont2 = 0;
						@endphp
						<tr>
							@foreach ($compra as $dato)
							@php
							$cont2++;
							@endphp
							@if ($cont2 == 3)
							<td>{{ date('Y-m-d', strtotime($dato)) }}</td>
							@elseif ($cont2 == 5)
							<td>$ {{ $dato }}</td>
							@elseif ($cont2 == 6)
							<td> Nivel {{ $dato }}</td>
							@else
							<td> {{ $dato }}</td>
							@endif

							@endforeach
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection