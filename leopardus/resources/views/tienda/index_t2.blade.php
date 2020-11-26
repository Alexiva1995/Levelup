@extends('layouts.dashboard')

@section('content')

{{-- alertas --}}
@include('dashboard.componentView.alert')

<div class="col-12">
	<div class="col-12 col-md-12 my-1 px-0">
		<h5 class="title-card">E-COMMERCE</h5>
      <h6 class="subtitle-card">Membresía</h6>
      <h1 class="title-card title-grand-t1 mt-1 mb-3">CLUB TRADER MEMBERSHIP</h1>
    </div> 
    <div class="row">
      <div class="col-12 col-md-12 px-0">
         <div class="card card-tab">
            <div class="card-content">
               <div class="card-body">
                  <div class="row">
                     @foreach ($productos as $item)
                        @if ($item->ID == 5618 || $item->ID == 5659)
                           @if (Auth::user()->ID == 2 || Auth::user()->ID == 315 || Auth::user()->ID == 316 || Auth::user()->ID == 317 || Auth::user()->ID == 318)
                              <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                 <div class="text-center card-shadow">
                                    <div class="card-content p-2 pb-3">
                                       <div class="card-content">
                                            <h4 class="h3-card-blue text-up mb-0">Starter</h4>
                                            <h4 class="subtitle-card text-up">Membership</h4>
                                            <div class="img-card-t1 mb-2">
                                                <img src="{{$item->imagen}}" alt="{{$item->post_title}}" class="card-img img-fluid">
                                             </div>
                                            {{-- <p class="p-card-border">Duración: 1 mes.</p> --}}
                                            <p class="p-card-border">Precio: USD {{$item->meta_value}}</p>
                                            <a class="btn text-blue float-right p-0 mb-1"
                                                onclick="detalles({{json_encode($item)}}, '{{$item->link->id}}', '{{$item->link->code}}')">
                                                Detalles
                                            </a>
                                            <form action="{{route('tienda-save-compra')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="no_modal" value="true">
                                                <input type="hidden" name="idproducto_" value="{{$item->ID}}">
                                                <input type="hidden" name="code_coinbase_" value="{{$item->link->code}}">
                                                <input type="hidden" name="id_coinbase_" value="{{$item->link->id}}">
                                                <input type="hidden" name="name_" value="{{$item->post_title}}">
                                                <input type="hidden" name="precio_" value="{{$item->meta_value}}">
                                                <input type="hidden" name="tipo_" value="">
                                                <button type="submit" class="btn text-white w-100 btn-card">
                                                    <i class="ficon feather icon-shopping-cart"></i>
                                                    Comprar
                                                </button>
                                            </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @endif
                        @else
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                           <div class="text-center card-shadow">
                              <div class="card-content p-2 pb-3">
                                 <div class="card-content">
                                    <h4 class="h3-card-blue text-up mb-0">Starter</h4>
                                    <h4 class="subtitle-card text-up">Membership</h4>
                                    <div class="img-card-t1 mb-2">
                                       <img src="{{$item->imagen}}" alt="{{$item->post_title}}" class="card-img img-fluid">
                                    </div>
                                    {{-- <p class="p-card-border">Duración: 1 mes.</p> --}}
                                    <p class="p-card-border">Precio: USD {{$item->meta_value}}</p>
                                    <a class="btn text-blue float-right p-0 mb-1" onclick="detalles({{json_encode($item)}}, '{{$item->link->id}}', '{{$item->link->code}}')">Detalles</a>
                                    <form action="{{route('tienda-save-compra')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="no_modal" value="true">
                                        <input type="hidden" name="idproducto_" value="{{$item->ID}}">
                                        <input type="hidden" name="code_coinbase_" value="{{$item->link->code}}">
                                        <input type="hidden" name="id_coinbase_" value="{{$item->link->id}}">
                                        <input type="hidden" name="name_" value="{{$item->post_title}}">
                                        <input type="hidden" name="precio_" value="{{$item->meta_value}}">
                                        <input type="hidden" name="tipo_" value="">
                                        <button type="submit" class="btn text-white w-100 btn-card">
                                            <i class="ficon feather icon-shopping-cart"></i>
                                            Comprar
                                        </button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endif
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="col-12 col-md-12 px-0">
         <h1 class="title-card title-grand-t1 mt-25- mb-3">My Tools</h1>
         <div class="card card-tab">
            <div class="card-content">
               <div class="card-body pt-0">
                  <div class="row justify-center">
                     <div class="col-lg-3 col-md-3 col-sm-12 mb-3 px-ajust">
                        <div class="text-center card-shadow-t2 mb-2">
                           <div class="img-card-t2 img-head-card">
                              <img src="https://comunidadlevelup.com/products/Logo/logo_business_pro_50020200703.png" class="card-img img-fluid">
                           </div>
                           <div class="card-content p-2 card-height-tools">
                              <div class="card-content">
                                 <h4 class="subtitle-card text-cap text-blu-t2">Herramienta SFA</h4>
                                 <p class="p-tools">El scanner SFA nos ofrece la oportunidad de tomar decisiones de inversión indeferentemente del horizonte de tiempo que busquemos. Desde un perfil Scalper hasta una operación swing puede apoyarse en esta herramienta desarrollada por el equipo de i+i+d de My Academy Trading
                                 </p>
                              </div>
                           </div>
                        </div>
                        <button type="button" class="btn text-white w-100 btn-card">
                           <i class="ficon feather icon-shopping-cart"></i>
                           $ 50 USD
                        </button>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-12 mb-3 px-ajust">
                        <div class="text-center card-shadow-t2 mb-2">
                           <div class="img-card-t2 img-head-card">
                              <img src="https://comunidadlevelup.com/products/Logo/logo_business_pro_50020200703.png" class="card-img img-fluid">
                           </div>
                           <div class="card-content p-2 card-height-tools">
                              <div class="card-content">
                                 <h4 class="subtitle-card text-cap text-blu-t2">Calculadora
                                    de Riesgos</h4>
                                 <p class="p-tools">
                                    Apoyados en nuestra calculadora de riesgo, podemos hacer una gestión de nuestro capital de
                                    manera profesional cuidando siempre y en todo momento el componente más importante en el trading,
                                    ¡¡¡LA GESTIÓN MONETARIA!!!
                                 </p>
                              </div>
                           </div>
                        </div>
                        <button type="button" class="btn text-white w-100 btn-card">
                           <i class="ficon feather icon-shopping-cart"></i>
                           $ 20 USD
                        </button>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-12 mb-3 px-ajust">
                        <div class="text-center card-shadow-t2 mb-2">
                           <div class="img-card-t2 img-head-card">
                              <img src="https://comunidadlevelup.com/products/Logo/logo_business_pro_50020200703.png" class="card-img img-fluid">
                           </div>
                           <div class="card-content p-2 card-height-tools">
                              <div class="card-content">
                                 <h4 class="subtitle-card text-cap text-blu-t2">Annubis Herramienta</h4>
                                 <p class="p-tools">   
                                    Mediante la utilización de modelos comparativos entre el precio y la volatilidad, Annubis Herramienta busca establecer posibles cambios en la estructura del mercado.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <button type="button" class="btn text-white w-100 btn-card">
                           <i class="ficon feather icon-shopping-cart"></i>
                           $ 30 USD
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
	</div>
</div>

{{-- modales --}}
@include('tienda.modalCompra')
{{-- @include('tienda.modalCupon') --}}

<script>
    function detalles(product, id, code) {
        $('#idproducto').val(product.ID)
        $('#img').attr('src',product.imagen)
        $('#title').html(product.post_title)
        $('#title2').val(product.post_title)
        $('#content').html(product.post_content)
        $('#price').html('$ '+product.meta_value)
        $('#price2').val(product.meta_value)
        $('#id_coinbase').val(id)
        $('#code_coinbase').val(code)
        $('#myModal1').modal('show')
    }

    function validarCupon() {
        let cupon = $('#cupon').val();
        let url = '{{route('tienda-verificar-cupon')}}'
        let token = '{{ csrf_token() }}'
        $.post(url, {'_token': token, 'cupon': cupon}).done(function(response){
            let data = JSON.parse(response)
            if (data.msj != '') {
                alert(data.msj)
            }else{
                $("#tipo1").val(data.tipo)
                $("#producto" + 1).val(data.paquete)
                $("#total" + 1).val(data.precio)
                $("#myModalLabel1").text('Cupon del Producto ' + data.paquete)
                $("#idproducto" + 1).val(data.idpaquete)
                $("#restante" + 1).val(0)
                $("#btn" + 1).text('Recibir Cupon')
                $("#cupon" + 1).val(data.cupon)
                $("#myModal" + 1).modal('show')
            }
        })
    }
</script>
@endsection