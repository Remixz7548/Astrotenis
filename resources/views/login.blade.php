@extends('plantilla_login')
@section('metadatos')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('titulos')
    Inicio de Sesion
@endsection
@section('contenido')
    <section class="container-login">
        <div class="login">
            <div class="blue-bg">
                <div class="box signin">
                    <h2>¿Ya tienes una cuenta?</h2>
                    <button class="signinBtn">Iniciar Sesion</button>
                </div>
                <div class="box signup">
                    <h2>¿No tienes una cuenta?</h2>
                    <button class="signupBtn">Registrate</button>
                </div>
            </div>
            <div class="formBx">
                <div class="form signinForm">
                    <form>
                        @csrf
                        <h3>Iniciar Sesion</h3>
                        <input id="Usuario" name="Usuario" type="text" placeholder="Usuario">
                        <input id="Contraseña" name="Contraseña" type="password" placeholder="Contraseña">
                        <input id="Login" type="submit" value="Login">
                        <a href="/Recuperacion" class="forgot">¿Has olvidado tu contraseña?</a>
                    </form>
                </div>
                <div class="form signupForm">
                    <form id="registro-user">
                        @csrf
                        <h3>Registrate</h3>
                        <input id="NombreR" name="NombreR" type="text" placeholder="Nombre Completo">
                        <input id="UsuarioR" name="UsuarioR" type="text" placeholder="Usuario">
                        <input id="Correo" name="Correo" type="email" placeholder="Correo Electronico">
                        <input id="Psw" name="Psw" type="password" placeholder="Contraseña">
                        <input id="Pswconfirm" name="Pswconfirm" type="password" placeholder="Confirmar Contraseña">
                        <div class="g-recaptcha" data-sitekey="6LeUNAUlAAAAAJzG5tnQK_7L7219XCwyT6-_r-fV"></div>
                        <input id="Registrar" type="submit" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/ValidacionLogin.js"></script>
    <script src="js/ValidacionRegister.js"></script>
    <script src="js/login.js"></script>
@endsection