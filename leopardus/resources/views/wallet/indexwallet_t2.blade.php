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
                                {{-- <div class="progress-bar" role="progressbar" aria-valuenow="{{$rentabilidad}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$rentabilidad}}%">
                                    {{$rentabilidad}}%
                                </div> --}}
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    497 USD
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <p class="mb-0"> Nivel actual: <strong class="p-blue">0</strong></p>
                                    <p class="mb-0"> Comisiones recibidas: <strong class="p-blue">0 USD</strong></p>
                                    <p class="mb-0"> Puntos para logro de meta: <strong class="p-blue">0 USD</strong></p>
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
                                 500
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
                                    <sup>$</sup> {{number_format(Auth::user()->wallet_amount, 2, ',', '.')}} <sup>USD</sup>
                                </h2>
                                <button type="button" class="btn bg-orange-alt text-white" style="margin-top: 20px;">
                                    Solicitar retiro
                                 </button>
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
        </div>
    </div>
</div>

@endsection