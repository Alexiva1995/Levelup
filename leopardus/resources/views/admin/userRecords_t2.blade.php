@extends('layouts.dashboard')

@section('content')
{{-- option datatable --}}
@include('dashboard.componentView.optionDatatable')

{{-- alertas --}}
@include('dashboard.componentView.alert')

<div class="col-12">
	<div class="col-12 col-md-12 my-1 px-0">
		<h5 class="title-card">Red de usuarios</h5>
      <h6 class="subtitle-card">Membresía</h6>
      <h1 class="title-card title-grand-t1 mt-1 mb-3">CLUB TRADER MEMBERSHIP</h1>
	</div>
	<div class="row">
      <div class="col-12 col-md-12 px-0">
         <div class="card card-tab">
            <div class="card-content">
               <div class="card-body">
                  <h5 class="title-card">Link Referido</h5>
                  <div class="table-responsive">
                     <table id="tab" class="table zero-configuration cell-border">
                        <thead>
                           <tr>
                              <th class="text-center">
                                 Nombre del Usuario
                              </th>
                              <th class="text-center">
                                 Correo
                              </th>
                              <th class="text-center">
                                 Membresía
                              </th>
                              <th class="text-center">
                                 Fecha de ingreso
                              </th>
                              <th class="text-center">
                                 Fecha de vencimiento
                              </th>
                              <th class="text-center">
                                 Nivel
                              </th>
                              <th class="text-center">
                                 Organización
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($datos as $usuario)
                              <tr>
                                 <td class="text-center">
                                    {{ $usuario['display_name'] }}
                                 </td>
                                 <td class="text-center">
                                    {{ $usuario['user_email'] }}
                                 </td>
                                 <td class="text-center">
                                    USD 97
                                 </td>
                                 <td class="text-center">
                                    {{ $usuario['fecha_activacion'] }}
                                 </td>
                                 <td class="text-center">
                                    01-03-2020
                                 </td>
                                 <td class="text-center">
                                    1-2-3
                                 </td>
                                 <td class="text-center">
                                    5
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Borrar usuario</h4>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.userdelete') }}" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="userdelete" id="userdelete">
					<div class="form-group">
						<label for="">Ingrese la clave del Administrador para poder borrar</label>
						<input type="password" class="form-control" name="clave">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger">Borrar</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script>
	function eliminarProducto(idproducto) {
		$('#userdelete').val(idproducto)
		$('#myModal').modal('show')
	}
</script>
@endsection