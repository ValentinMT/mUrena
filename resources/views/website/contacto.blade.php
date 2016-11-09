@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <div class="col s8">
                    <div class="col s6">
                        <p id="p-Cont">
                            <b>
                                Sucursal Pino Suárez (Matriz)
                                <br>
                                Ave. Pino Suárez #300, Muebles Ureña
                                <br>
                                <i class="fa fa-phone" aria-hidden="true"></i> (312) 312-5463
                            </b>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7533.3523812098365!2d-103.730237!3d19.252939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x983d0c0c851e9232!2sMuebles+Ure%C3%B1a!5e0!3m2!1ses!2smx!4v1478198101600"
                            width="300" height="394" frameborder="0" style="border-radius: 20px;" allowfullscreen></iframe>
                    </div>
                    <div class="col s6">
                        <p id="p-Cont">
                            <b>
                                Sucursal Calzada Pedro A. Galván
                                <br>
                                Calzada Pedro A. Galván #226 Sur
                                <br>
                                <i class="fa fa-phone" aria-hidden="true"></i> (312) 312-5463
                            </b>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15068.55269521347!2d-103.72388700000002!3d19.232809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255007009d27c5%3A0xd51de61cf6f5c27a!2sGeneral+Pedro+Galv%C3%A1n+Sur+226%2C+La+Garita%2C+28000+Colima%2C+Col.%2C+M%C3%A9xico!5e0!3m2!1ses!2smx!4v1478198152228"
                        width="300" height="394" frameborder="0" style="border-radius: 20px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col s4">
                    <h5 id="texto-CU"><b>Contáctanos</b></h5>
                    <hr>
                    <form id="form-contacto" action="/mensajes" method="POST">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label id="texto"><i class="fa fa-user"></i>  Nombre</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email">
                            <label id="texto"><i class="fa fa-envelope"></i>  E-mail</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="telefono">
                            <label id="texto"><i class="fa fa-phone" aria-hidden="true"></i>  Teléfono</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea class="materialize-textarea" length="250" name="mensaje"></textarea>
                            <label id="texto"><i class="fa fa-comment"></i>  Mensaje</label>
                        </div>
                        <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
            <div class="col s12">
                <hr>
                <h5 align=left style="margin-left: 20px;" id="texto-CU">
                    <b>Síguenos en: </b>
                    <a href="https://www.facebook.com/urenamuebles" target="_blank">
                        <i class="fa fa-facebook-official fa-1x" style="color: #0d47a1;" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/user/MUEBLERIAURENA" target="_blank">
                        <i class="fa fa-youtube-square fa-1x" style="color: #b71c1c;" aria-hidden="true"></i>
                    </a>
                </h5>
            </div>
        </div>
    </center>
</div>
<br>

@stop