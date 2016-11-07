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
                            <img src="/imagenes/muebleria.jpg"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/sliderurena.jpg"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/urena4.jpg"> <!-- random image -->
                        </li>
                        <li>
                            <img src="/imagenes/FACHADA.jpg"> <!-- random image -->
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
        </div>
    </center>
</div>
<br>

@stop