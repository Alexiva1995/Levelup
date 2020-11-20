@extends('layouts.dashboard')

@section('content')
<div class="col-12 col-md-12 my-1 px-0">
	<h5 class="title-card">Red de usuarios</h5>
	<h6 class="subtitle-card">Membresía</h6>
	<h1 class="title-card title-grand-t1 mt-1 mb-3">CLUB TRADER MEMBERSHIP</h1>
</div>
{{-- option datatable --}}
@include('dashboard.componentView.optionDatatable')

{{-- formulario de fecha  --}}
@include('dashboard.componentView.formSearch', ['route' => 'buscardirectos', 'name1' => 'fecha1', 'name2' => 'fecha2', 'text1' => 'Fecha Desde', 'text1' => 'Fecha Hasta', 'type' => 'date'])

<div class="card no-border">
	<div class="card-content">
		<div class="card-body pl-0 pr-0">
			<h5 class="title-card">Link Referido</h5>
			<div class="table-responsive">
				<table id="table_tab" class="table zero-configuration cell-border">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Paquete</th>
							<th>Estado</th>
							<th>Ingreso</th>
						</tr>
					</thead>
					<tbody>
						@php
						$cont = 0;
						$paquete = null;
						$nombre = 'Sin Paquete';
						@endphp
						@foreach ($referidosDirectos as $referido)
						@php
						$paquete = json_decode($referido->paquete);
						if (!empty($paquete)) {
							$nombre = $paquete->nombre;
						}
						$cont++;
						// $rol = DB::table('roles')->where('ID', $referido->rol_id)->select('name')->get()[0];
						@endphp
						<tr>
							<td>{{ $referido->ID }}</td>
							<td>{{ $referido->display_name }}</td>
							<td>{{ $referido->user_email }}</td>
							<td>{{ $nombre }}</td>
							@if ($referido->status == '0')
							<td>Inactive</td>
							@else
							<td>Active</td>
							@endif
							<td>{{ date('d-m-Y', strtotime($referido->created_at)) }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection