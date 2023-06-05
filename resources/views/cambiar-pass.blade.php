@extends('plantilla_login')
@section('metadatos')
    <!-- CSRF Token -->
    <link rel="stylesheet" href="css/recuperar.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('titulos')
    Inicio de Sesion
@endsection
@section('contenido')
    <section class="container-cambiar">
        <div class="recuperar">
            <form>
                @csrf
                <h3>Recupera tu contraseña</h3>
                <input id="Correo" name="Correo" type="email" placeholder="Correo Electronico">
                <input id="Psw" name="Psw" type="password" placeholder="Contraseña Nueva">
                <input id="Pswconfirm" name="Pswconfirm" type="password" placeholder="Confirmar Contraseña">
                <input id="EnviarCorreo" type="submit" value="Enviar correo">
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="js/Correo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection