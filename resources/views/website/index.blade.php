@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="/imagenes/muebleria.jpg" class="img-responsive"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/sliderurena.jpg" class="img-responsive"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/urena4.jpg" class="img-responsive"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/FACHADA.jpg" class="img-responsive"> <!-- random image -->
                        </li>
                    </ul>
                </div>
                <br>
            </div>

            <div class="col s12">
                <div id="fondo-NP">
                    <label id="texto-acerca">Nuevos productos</label>
                </div>
            </div>
            <div class="col s12">
                <center>
                    <div id="form-producto" class="col s3">
                        <a href="/imagenes/altezza.jpg" target="_blank">
                            <img src="/imagenes/altezza.jpg" class="img-responsive">
                        </a>
                        <hr>
                        <label style="font-size: 12px;">Sala Altezza - No precio</label>
                        <h5 id="texto-CU"><b>Precio: ?</b></h5>
                        <hr>
                        <a href="#!" id="boton2" class="btn waves-effect waves-light" onclick="mostrar()">
                            Detalles
                        </a>
                        <!--<a id="boton2" class="btn waves-effect waves-light">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </a>-->
                    </div>
                    <div id="form-producto" class="col s3">
                        <a href="/imagenes/mueble.jpg" target="_blank">
                            <img src="/imagenes/mueble.jpg" class="img-responsive">
                        </a>
                        <hr>
                        <label style="font-size: 12px;">Sala Acadia 3-2-1 - No precio</label>
                        <h5 id="texto-CU"><b>Precio: ?</b></h5>
                        <hr>
                        <a href="#!" id="boton2" class="btn waves-effect waves-light" onclick="mostrar()">
                            Detalles
                        </a>
                    </div>
                    <div id="form-producto" class="col s3">
                        <a href="/imagenes/librero jakson.png" target="_blank">
                            <img src="/imagenes/librero jakson.png" class="img-responsive">
                        </a>
                        <hr>
                        <label style="font-size: 12px;">Librero Jakson</label>
                        <h5 id="texto-CU"><b>Precio: $8,530.00</b></h5>
                        <hr>
                        <a href="#!" id="boton2" class="btn waves-effect waves-light" onclick="mostrar()">
                            Detalles
                        </a>
                    </div>
                    <div id="form-producto" class="col s3">
                        <a href="/imagenes/16-RECLINABLE_BILBAO.jpg" target="_blank">
                            <img src="/imagenes/16-RECLINABLE_BILBAO.jpg" class="img-responsive">
                        </a>
                        <hr>
                        <label style="font-size: 12px;">Reclinable Bilbao - No precio</label>
                        <h5 id="texto-CU"><b>Precio: ?</b></h5>
                        <hr>
                        <a href="#!" id="boton2" class="btn waves-effect waves-light" onclick="mostrar()">
                            Detalles
                        </a>
                    </div>
                </center>
            </div>
        </div>
    </center>

    <!-- Modal Structure -->
    <div id="detalle" class="modal center">
        <div class="modal-content">
            <a>
                <img style="width: 380px; height: 280px" src="/imagenes/altezza.jpg" class="img-responsive">
            </a>
            <hr>
            <label style="font-size: 18px;">Sala Altezza - Pregunte por precio</label>
            <h5 id="texto-CU"><b>Precio: ?</b></h5>
            <hr>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
        </div>
    </div>
</div>
<br>

@stop

@section('scripts')
    <script type="text/javascript">
        function mostrar(){
            $('#detalle').openModal();
        }
    </script>
@stop