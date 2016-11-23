@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <div class="col s12">
                    <h4 id="texto-CU"><b>Regístrate</b></h4>
                    <form id="form-reg" action="" method="POST">
                        <div class="input-field col s7">
                            <input type="text" class="validate" name="nombre">
                            <label id="texto">Nombre Completo</label>
                        </div>
                        <div class="input-field col s5">
                            <input type="text" class="validate" name="fNac">
                            <label id="texto">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="usuario">
                            <label id="texto"><i class="fa fa-user"></i>  Usuario</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="password" class="validate" name="pass">
                            <label id="texto"><i class="fa fa-key"></i>  Contraseña</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="email">
                            <label id="texto">E-mail</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" class="validate" name="tel">
                            <label id="texto"><i class="fa fa-phone"></i> Teléfono</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" class="validate" name="dir">
                            <label id="texto"><i class="fa fa-home"></i> Dirección</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" class="validate" name="dir">
                            <label id="texto">CP (código postal)</label>
                        </div>
                        <div class="col s12">
                            <br>
                            <br>
                        </div>
                        <div class="col s6">
                            <a href="/login" id="boton" class="btn waves-effect waves-light">
                                Cancelar
                            </a>
                        </div>
                        <div class="col s6">
                            <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">
                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
</div>
<br>

@stop