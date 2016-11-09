@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <div style="width: 25%; max-width: 225px;" class="col s3">
                	<div id="buscador">
			        	<label style="font-size: 14px;">Buscador</label>
			        	<div class="input-field col s12">
			                <input type="text" class="validate" name="nombre" placeholder="Buscar: ej. Sofa">
			            </div>
			        </div>
                	<ul class="collapsible" data-collapsible="accordion">
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Salas</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Recamaras</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Comedores</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Muebles infantiles</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Cocinas integrales</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Piezas</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Reclinables</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Sillones</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Sofas Cama</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Sillas</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Antesalas</div>
					    </li>
					    <li>
					    	<div style="text-align: left;" class="collapsible-header">→ Paquetes</div>
					    </li>
					</ul>
                </div>
                <div class="col s9">
                	<center>
	                    <div id="form-producto2" class="col s3">
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
	                    </div>
	                    <div id="form-producto2" class="col s3">
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
	                    <div id="form-producto2" class="col s3">
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
	                    <div id="form-producto2" class="col s3">
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
	                    </div>
	                    <div id="form-producto2" class="col s3">
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
	                    <div id="form-producto2" class="col s3">
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
	                    <div id="form-producto2" class="col s3">
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
	                    </div>
	                    <div id="form-producto2" class="col s3">
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
	                    <div id="form-producto2" class="col s3">
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
	                </center>
	                <!--<ul class="pagination">
					    <li class="disabled"><a href="#!"><i class="fa fa-arrow-left"></i></a></li>
					    <li class="active"><a href="#!">1</a></li>
					    <li class="waves-effect"><a href="#!">2</a></li>
					    <li class="waves-effect"><a href="#!">3</a></li>
					    <li class="waves-effect"><a href="#!">4</a></li>
					    <li class="waves-effect"><a href="#!">5</a></li>
					    <li class="waves-effect"><a href="#!"><i class="fa fa-arrow-right"></i></a></li>
					</ul>-->
                </div>
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