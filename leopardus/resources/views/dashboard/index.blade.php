@extends('layouts.dashboard')

@section('content')
<style>
	.padding-card {
		padding: 3rem 2rem !important;
	}
	.card{
		box-shadow: none;
		border: 1px solid rgba(0, 0, 0, 0.1);
		margin-bottom: 0.5rem;
	}
	.card button {
		border-radius: 50px;
		background: -prefix-linear-gradient(left,#001CBD, #005);
		background: linear-gradient(to right, #001CBD, #005);
		text-transform: uppercase;
	}
	.text-card-blue {
		margin: 0 auto !important;
		color: #001CBD;
		font-size: 40px;
	}
	.card sup {
		top: -0.9rem;
		font-size: 45%;
	}
	.title-card {
		font-weight: normal;
		color: #808080;
		text-transform: uppercase;
		font-stretch: normal;
		font-style: normal;
		line-height: normal;
		letter-spacing: 2px;
	}
	.progress.progress-bar-primary.progress-xl {
		height: 2.5em;
		border-radius: 50px;
		background: -prefix-linear-gradient(left,#001CBD, #005);
		background: linear-gradient(to right, #001CBD, #005);
	}
	.p-blue {
		color: #001CBD;
		font-weight: normal;
	}
	.p-violet {
		color: #632FE1;
		font-weight: normal;
	}
	.btn-progress {
		float: right;
		text-transform: initial !important;
		position: relative;
		top: 30%;
	}
	.header-nivel {
    padding-bottom: 9px !important;
	}
	.title-nivel {
		margin: 0 auto;
		padding: 0;
	}
	.padd-0 {
		padding: 0;
	}
	.m-nv-nm {
		margin: 60px auto 0
	}
	.fl-right {
		float: right;
	}
	.nv-title {
		text-transform: uppercase;
		color: #808080;
		font-weight: 500 !important;
		font-size: 22px !important;
		letter-spacing: 0.05rem;
	}
	.text-nivel {
		text-align: center;
		font-size: 10px;
		text-transform: uppercase;
		position: relative;
		right: 15px;
	}
	.text-ventas {
		text-align: left;
		font-size: 12px;
		text-transform: initial;;
	}
</style>

<div class="contai2">
	<div class="row">
		<div class="col-12 col-md-8">
			@include('dashboard.componenteIndex.left_items')
		</div>
		<div class="col-12 col-md-4">
			@include('dashboard.componenteIndex.right_items')
		</div>
		{{-- primeros cuadro --}}
		{{-- @include('dashboard.componenteIndex.first_square') --}}
		{{-- secundo cuadro --}}
		{{-- @include('dashboard.componenteIndex.second_square') --}}
		{{-- tecer cuadro --}}
		{{-- @include('dashboard.componenteIndex.third_square') --}}
	</div>
</div>

@endsection
@push('custom_js')
<script src="{{asset('assets/scripts/graficas.js')}}"></script>
<script type="text/javascript">
	function copyToClipboard(element) {
		var aux = document.createElement("input");
		aux.setAttribute("value", document.getElementById(element).innerHTML.replace('&amp;', '&').trim());
		document.body.appendChild(aux);
		aux.select();
		document.execCommand("copy");
		document.body.removeChild(aux);
		Swal.fire({
			title: '¡Link Copiado!',
			text: "Su link de referido esta listo para pegar",
      		type: "success",
			confirmButtonClass: 'btn btn-primary',
			buttonsStyling: false,
		})
	}
</script>
@endpush

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
@endpush