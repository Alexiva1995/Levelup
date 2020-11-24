<div class="col-12 dynamic">
   <div class="row">
      <div class="col-12 col-md-12 row">
         <div class="col-12 col-md-12 mt-2">
            <h5 class="title-card mb-1">Link Referido</h5>
            <div class="card">
               <div class="card-content">
                  <div class="card-body padding-card">
                     <div class="row">
                        <div class="col-12 card-header-t2">
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

         <div class="col-12 col-md-12 mt-2">
            <h5 class="title-card mb-1">Balance general</h5>
            <div class="card">
               <div class="card-header d-flex flex-column align-items-start padding-card">
                  <h2 class="text-card-blue mt-1 mb-2">
                     <sup>$</sup> {{number_format($ganancias, 2, ',', '.')}} <sup>USD</sup>
                  </h2>
               </div>
            </div>
        </div>

         <div class="col-12 col-md-12 mt-2">
            <h5 class="title-card mb-1">Saldo disponible</h5>
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start padding-card">
                    <h2 class="text-card-blue mt-1 mb-2">
                        <sup>$</sup> {{number_format(Auth::user()->wallet_amount, 2, ',', '.')}} <sup>USD</sup>
                    </h2>
                     @if (Auth::user()->rol_id != 0)
                        <button type="button" class="btn bg-orange-alt text-white" style="margin-top: 20px;" data-toggle="modal" data-target="#myModalRetiro">
                              Solicitar retiro
                        </button>
                     @endif
                </div>
            </div>
        </div>

         <div class="col-12 col-md-12 mt-2">
            <h5 class="title-card mb-1">Nuevos Miembros</h5>
            <div class="card">
               <div class="card-content ov-auto">
                  <div class="card-body padding-card-member">
                     @foreach ($new_member as $key => $member)
                        {{-- <p>
                           @php
                              var_dump($member['paquete']);
                              $paquete = json_decode($member['paquete']);
                              echo $paquete->nivel;
                              $paquete = json_decode($member['paquete'], true);
                              var_dump($paquete['nivel']);
                           @endphp
                        </p> --}}
                     <div class="d-flex justify-content-start align-items-center mb-2">
                        <div class="avatar m-0 mr-1">
                           <div class="semicircle" style="--v:-70deg">
                              <img src="{{asset('avatar/'.$member['avatar'])}}" alt="avtar img holder" height="45" width="45" style="margin-top: 8px;">
                           </div>
                        </div>
                        <div class="user-page-info">
                           <h6 class="mb-0">{{$member['nombre']}}</h6>
                           <p class="mb-0">Golden Memberships</p>
                           {{-- @if (Auth::user()->ID == 1)
                              <span class="font-small-3 mt-0">Nivel @php echo $paquete->nivel; @endphp</span>
                           @else
                              <span class="font-small-3 mt-0">Nivel {{$member['nivel']}}</span>
                           @endif --}}
                           <span class="font-small-3 mt-0">Nivel {{$member['nivel']}}</span>
                        </div>
                     </div>

                        {{-- <div class="d-flex justify-content-start align-items-center mb-1">
                           <div class="avatar mr-50">
                              <img src="{{asset('avatar/'.$member['avatar'])}}" alt="avtar img holder" height="35" width="35">
                           </div>
                           <div class="user-page-info">
                              <h6 class="mb-0">{{$member['nombre']}}</h6>
                              <span class="font-small-2">{{date('d-m-Y', strtotime($member['fecha']))}}</span>
                           </div>
                        </div> --}}
                     @endforeach
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
       let url = 'admin/wallet/obtenermetodo/' + $('#metodopago').val()
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