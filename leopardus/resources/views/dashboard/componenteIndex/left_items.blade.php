@php
    use Carbon\Carbon;
    $ano = Carbon::now()->format('Y')
@endphp

<div class="col-12">
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
                    <div class="col-12 col-md-12 my-1">
                        <h5 class="title-card">Comisiones Directas</h5>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">1 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            10<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel1"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">2 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            2<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel2"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">3 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            3<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel3"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">4 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            5<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel4"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- grafica de comisión --}}
            <div class="col-12 col-md-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <h6 class="title-card" style="">Comisión - {{$ano}}</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="ingresocomision"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 my-1">
                        <h5 class="title-card">Comisiones por ingresos de tus usuarios</h5>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">1 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            10<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel1"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">2 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            2<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel2"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">3 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            3<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel3"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header card-nivel">
                                <div class="col-12 row title-nivel">
                                    <div class="col-12 col-md-9 padd-0" style="">
                                        <h4 class="nv-title">4 Nivel</h4>
                                    </div>
                                    <div class="col-12 col-md-3 padd-0">
                                        <h2 class="p-violet fl-right">
                                            <i class="feather icon-arrow-up"></i>
                                            5<sup>%</sup>
                                            <p class="p-violet text-nivel">Comisión</p>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 row padd-0 m-nv-nm">
                                    <div class="col-12 col-md-6 padd-0">
                                        {{-- <h1 class="mb-0 p-blue" id="nivel4"> --}}
                                        <h1 class="mb-0 p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Ventas</p>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-6 padd-0">
                                        <h1 class="mb-0 fl-right p-blue">
                                            <sup>$</sup>0,00<sup>USD</sup>
                                            <p class="p-blue text-ventas">Comisión</p>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- grafica de ingresos por comisión --}}
            <div class="col-12 col-md-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <h6 class="title-card" style="">Ingresos por comisión</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="ingresocomision"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>