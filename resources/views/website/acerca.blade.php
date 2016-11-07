@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <label id="texto-acerca">Mueblería Ureña</label>
                <br>
                <br>
                <div class="col s8">
                    <iframe width="555" height="312" style="border-radius: 20px;"
                        src="https://www.youtube.com/embed/bFCCkIVb58w" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                <div class="col s4">
                    <h5 id="texto-MVO"><i class="fa fa-globe" aria-hidden="true"></i> Misión</h5>
                    <p id="p-MVO">
                        Nuestra misión es brindar a los clientes, un servicio de calidad, con productos de vanguardia, clase y estilo.
                    </p>
                    <hr>
                    <h5 id="texto-MVO"><i class="fa fa-eye" aria-hidden="true"></i> Visión</h5>
                    <p id="p-MVO">
                        Nuestra visión es ser una empresa líder en el sector mueblero con una amplia gama de productos.
                    </p>
                    <hr>
                    <h5 id="texto-MVO"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Objetivo</h5>
                    <p id="p-MVO">
                        La satisfacción de nuestros clientes, desde la primera compra.
                    </p>
                </div>
            </div>
        </div>
    </center>
</div>
<br>

@stop