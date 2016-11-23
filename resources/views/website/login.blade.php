@extends('templates.website')

@section('content')

<br>
<div class="container">
    <center>
        <div class="row">
            <div class="col s12">
                <div class="col s12">
                    <h4 id="texto-CU"><b>Iniciar Sesión</b></h4>
                    <form id="form-login" action="" method="POST">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="usuario">
                            <label id="texto"><i class="fa fa-user"></i>  Usuario</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="password" class="validate" name="pass">
                            <label id="texto"><i class="fa fa-key"></i>  Contraseña</label>
                        </div>
                        <div class="col s12">
                            <br>
                            <a href="/registro" style="color: #765745;"><b>¿No tienes cuenta?, Regístrate</b> <i class="fa fa-arrow-right"></i></a>
                            <br>
                            <br>
                        </div>
                        <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">
                            Iniciar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </center>
</div>
<br>

@stop