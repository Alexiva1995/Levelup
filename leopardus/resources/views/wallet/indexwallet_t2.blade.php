@extends('layouts.dashboard')

@section('content')
@php
use Carbon\Carbon;
$fecha = Carbon::now();
$activo = false;
if ($fecha->dayOfWeek >= 1 && $fecha->dayOfWeek <= 2) { $activo=true; } 
@endphp 

{{-- option datatable --}}
@include('dashboard.componentView.optionDatatable')

{{-- alertas --}}
@include('dashboard.componentView.alert')

<div class="col-12">
    <div class="col-12 col-md-12 my-1 px-0">
        <h5 class="title-card">Billetera</h5>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 row">
            <div class="col-12 col-md-12 mt-2">
                <h5 class="title-card mb-1">Balance General</h5>
                <div class="card" style="margin-bottom: 1.2rem;">
                    <div class="card-header">
                        <p class="mb-0">Cumplimiento de metas:</p>
                    </div>
                    <div class="card-content h-100 d-flex align-items-center">
                        <div class="card-body">
                            <div class="progress progress-bar-primary progress-xl mb-1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:{{$barra['progre_porce']}}%">
                                    {{$barra['progreso']}} USD
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <p class="mb-0"> Nivel actual: <strong class="p-blue">{{$barra['nivel']}}</strong></p>
                                    <p class="mb-0"> Comisiones recibidas: <strong class="p-blue">{{$barra['comision']}} USD</strong></p>
                                    <p class="mb-0"> Puntos para logro de meta: <strong class="p-blue">{{$barra['meta']}} USD</strong></p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <button type="button" class="btn bg-orange-alt text-white btn-progress">Detalles</button>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="row">
                     <div class="col-12 col-md-4 mt-2">
                        <h5 class="title-card mb-1">Balance general</h5>
                        <div class="card h-75" style="justify-content: center;">
                           <div class="card-header d-flex flex-column align-items-start padding-card">
                              <h2 class="text-card-blue mt-1 mb-2">
                                 <sup>$</sup>
                                 {{number_format($ganancias, 2, ',', '.')}}
                                 <sup>USD</sup>
                              </h2>
                           </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <h5 class="title-card mb-1">Saldo disponible</h5>
                        <div class="card h-75" style="justify-content: center;">
                            <div class="card-header d-flex flex-column align-items-start padding-card">
                                <h2 class="text-card-blue mt-1 mb-2">
                                    <sup>$</sup>
                                    {{number_format(Auth::user()->wallet_amount, 2, ',', '.')}} <sup>USD</sup>
                                </h2>
                                @if (Auth::user()->rol_id != 0)
                                    <button type="button" class="btn bg-orange-alt text-white" style="margin-top: 20px;" data-toggle="modal" data-target="#myModalRetiro">
                                        Solicitar retiro
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <h5 class="title-card mb-1">Link Referido</h5>
                        <div class="card h-75" style="justify-content: center;">
                           <div class="card-content">
                              <div class="card-body padding-card">
                                 <div class="row">
                                    <div class="col-12 card-header-t2" style="margin-top: -25px;">
                                       <div class="float-right" >
                                          <a class="icon-card-header-t2" href="#">
                                             <i class="ficon feather icon-more-horizontal"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-12 mt-2 text-center" onclick="copyToClipboard('copy')"
                                       style="margin-top: 1rem !important;">
                                       <button type="button" class="btn bg-orange-alt text-white">
                                          Copiar Link
                                       </button>
                                       <p style="display:none;" id="copy">
                                          {{route('autenticacion.new-register').'?referred_id='.Auth::user()->ID}}
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>
            </div>

            <div class="col-12 col-md-12 mt-2">
                <div class="card no-border">
                    <div class="card-content">
                        <div class="card-body pl-0 pr-0">
                            <div class="table-responsive">
                                <table id="mytable" class="table zero-configuration cell-border">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th class="text-center">
                                                Usuario
                                            </th>
                                            <th class="text-center">
                                                Fecha
                                            </th>
                                            <th class="text-center">
                                                Descripción
                                            </th>
                                            <th class="text-center">
                                                Cash
                                            </th>
                                            <th class="text-center">
                                                Credito
                                            </th>
                                            <th class="text-center">
                                                Feed
                                            </th>
                                            <th class="text-center">
                                                Balance
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wallets as $wallet)
                                        <tr>
                                            <td class="text-center">
                                                {{$wallet->id}}
                                            </td>
                                            <td class="text-center">
                                                {{$wallet->usuario}}
                                            </td>
                                            <td class="text-center">
                                                {{date('d-m-Y', strtotime($wallet->created_at))}}
                                            </td>
                                            <td class="text-center">
                                                {{$wallet->descripcion}}
                                            </td>
                                            <td class="text-center">
                                                
                                                    @if ($moneda->mostrar_a_d)
                                                    {{$moneda->simbolo}} {{$wallet->debito}}
                                                    @else
                                                    {{$wallet->debito}} {{$moneda->simbolo}}
                                                    @endif
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                                    @if ($moneda->mostrar_a_d)
                                                    {{$moneda->simbolo}} {{$wallet->credito}}
                                                    @else
                                                    {{$wallet->credito}} {{$moneda->simbolo}}
                                                    @endif
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                                    @if ($moneda->mostrar_a_d)
                                                    {{$moneda->simbolo}} {{$wallet->descuento}}
                                                    @else
                                                    {{$wallet->descuento}} {{$moneda->simbolo}}
                                                    @endif
                                                
                                            </td>
                                            <td class="text-center">
                                                
                                                    @if ($moneda->mostrar_a_d)
                                                    {{$moneda->simbolo}} {{$wallet->balance}}
                                                    @else
                                                    {{$wallet->balance}} {{$moneda->simbolo}}
                                                    @endif
                                                
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
</div>

@include('wallet/componentes/formRetiro', ['disponible' => Auth::user()->wallet_amount, 'tipowallet' => 1])
@include('wallet/componentes/formTransferencia')

<script>
    $(document).ready(function () {
        $('.retirarbtn').click(function () {
            console.log('entre');
            retirarpago()
            $('.formretiro').submit();
        })
    })

    function metodospago() {
        $('#correo').hide()
        $('#wallet').hide()
        $('#bancario').hide()
        let url = 'wallet/obtenermetodo/' + $('#metodopago').val()
        $.get(url, function (response) {
            let data = JSON.parse(response)
            $('#total').val(0)
            if (data.tipofeed == 1) {
                $('#comision').val(data.feed * 100)
                $('#lblcomision').text('Comision de Retiro en Porcentaje')
                $('#comisionH').val(data.feed)
                $('#tipo').val(data.tipofeed)
                $('#monto_min').val(data.monto_min)
            } else {
                $('#comision').val(data.feed)
                $('#lblcomision').text('Comision de Retiro Fija')
                $('#comisionH').val(data.feed)
                $('#tipo').val(data.tipofeed)
                $('#monto_min').val(data.monto_min)
            }
            if (data.correo == 1) {
                $('#correo').show()
            }
            if (data.wallet == 1) {
                $('#wallet').show()
            }
            if (data.bancario == 1) {
                $('#bancario').show()
            }
            $('#retirar').show()
        })
    }

    function retirarpago() {
        $('.formretiro').submit();
    }

    function totalRetiro(valor) {
        let resul = valor
        // if ($('#tipo').val() == 1) {
        //     let tmp = valor * $('#comisionH').val()
        //     resul = valor - tmp
        // } else {
        //     resul = valor - $('#comisionH').val()
        // }
        $('#total').val(resul)
    }
</script>
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