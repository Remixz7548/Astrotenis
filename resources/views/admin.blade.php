@extends('plantilla_admin')
@section('titulos')
    Admin
@endsection
@section('contenido')
    <div class="div-titulo">
        <h1>Inventario</h1>
    </div>
    
    <div class="contenedor">
        <div class="div-formulario">
            <form action="#" id="formulario">
                <select name="categoria" id="categoria">
                    <option hidden selected value="">Categoria</option>
                    <option value="Tenis">Tenis</option>
                    <option value="Tenis LifeStyles">Tenis LifeStyles</option>
                    <option value="Running">Running</option>
                    <option value="Fútbol">Fútbol</option>
                    <option value="Sandalias">Sandalias</option>
                </select>
                <input type="text" id="nombre" placeholder="Nombre">
                <input type="text" id="precio" placeholder="Precio">
                <select name="marca" id="marca">
                    <option hidden selected value="">Marca</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Pumas">Pumas</option>
                    <option value="Vans">Vans</option>
                </select>
                <input type="number" id="talla" placeholder="Talla">
                <input type="number" id="cantidad" placeholder="Cantidad">
                <button type="submit" id="btnAgregar">Agregar</button>
            </form>
        </div>

        <div class="div-listado">
            <h2>Listado Tenis</h2>
            <input type="text" name="buscador" id="buscador" placeholder="Buscar por nombre">
            <div class="div-empleados">
                
            </div>
        </div>

    </div>
@endsection
    