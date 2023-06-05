let listaEmpleados = [];

const objEmpleado = {
    id: '',
    categoria: '',
    nombre: '',
    precio: '',
    marca: '',
    talla: '',
    cantidad: ''
}

let editando = false;

const formulario = document.querySelector('#formulario');
const categoriaInput = document.querySelector('#categoria');
const nombreInput = document.querySelector('#nombre');
const precioInput = document.querySelector('#precio');
const marcaInput = document.querySelector('#marca');
const tallaInput = document.querySelector('#talla');
const cantidadInput = document.querySelector('#cantidad');
const btnAgregarInput = document.querySelector('#btnAgregar');

formulario.addEventListener('submit', validarFormulario);

function validarFormulario(e) {
    e.preventDefault();

    if(categoriaInput.value === '' ||  nombreInput.value === '' || precioInput.value === '' || marcaInput.value === '' ||  tallaInput.value === '' || cantidadInput.value === '') {
        alert('Todos los campos se deben llenar');
        return;
    }

    if(editando) {
        editarEmpleado();
        editando = false;
    } else {
        objEmpleado.id = Date.now();
        objEmpleado.categoria = categoriaInput.value;
        objEmpleado.nombre = nombreInput.value;
        objEmpleado.precio = precioInput.value;
        objEmpleado.marca = marcaInput.value;
        objEmpleado.talla = tallaInput.value;
        objEmpleado.cantidad = cantidadInput.value;

        agregarEmpleado();
    }
}

function agregarEmpleado() {

    listaEmpleados.push({...objEmpleado});

    mostrarEmpleados();

    formulario.reset();
    limpiarObjeto();
}

function limpiarObjeto() {
    objEmpleado.id = '';
    objEmpleado.categoria = '';
    objEmpleado.nombre = '';
    objEmpleado.precio = '';
    objEmpleado.marca = '';
    objEmpleado.talla = '';
    objEmpleado.cantidad = '';
}

function mostrarEmpleados() {
    limpiarHTML();

    const divEmpleados = document.querySelector('.div-empleados');
    
    listaEmpleados.forEach(empleado => {
        const {id, categoria, nombre, precio, marca, talla, cantidad} = empleado;

        const contenedor = document.createElement('div');
        contenedor.classList.add('pro-contenedor');

        const parrafo = document.createElement('p');
        parrafo.classList.add('articulo');
        parrafo.textContent = `${id} - ${categoria} - ${nombre} - ${precio} - ${marca} - ${talla} - ${cantidad} `;
        parrafo.dataset.id = id;
        contenedor.append(parrafo);


        const botones = document.createElement('div');
        botones.classList.add('contenedor-botones');
        parrafo.append(botones);

        const editarBoton = document.createElement('button');
        editarBoton.onclick = () => cargarEmpleado(empleado);
        editarBoton.textContent = 'Editar';
        editarBoton.classList.add('btn', 'btn-editar');
        botones.append(editarBoton);

        const eliminarBoton = document.createElement('button');
        eliminarBoton.onclick = () => eliminarEmpleado(id);
        eliminarBoton.textContent = 'Eliminar';
        eliminarBoton.classList.add('btn', 'btn-eliminar');
        botones.append(eliminarBoton);

        divEmpleados.appendChild(contenedor);
    });
}

function cargarEmpleado(empleado) {
    const {id, categoria, nombre, precio, marca, talla, cantidad} = empleado;

    categoriaInput.value = categoria;
    nombreInput.value = nombre;
    precioInput.value = precio;
    marcaInput.value = marca;
    tallaInput.value = talla;
    cantidadInput.value = cantidad;

    objEmpleado.id = id;

    formulario.querySelector('button[type="submit"]').textContent = 'Actualizar';
    
    editando = true;
}

function editarEmpleado() {

    objEmpleado.categoria = categoriaInput.value;
    objEmpleado.nombre = nombreInput.value;
    objEmpleado.precio = precioInput.value;
    objEmpleado.marca = marcaInput.value;
    objEmpleado.talla = tallaInput.value;
    objEmpleado.cantidad = cantidadInput.value;

    listaEmpleados.map(empleado => {

        if(empleado.id === objEmpleado.id) {
            empleado.id = objEmpleado.id;
            empleado.categoria = objEmpleado.categoria;
            empleado.nombre = objEmpleado.nombre;
            empleado.precio = objEmpleado.precio;
            empleado.marca = objEmpleado.marca;
            empleado.talla = objEmpleado.talla;
            empleado.cantidad = objEmpleado.cantidad;
        }

    });

    limpiarHTML();
    mostrarEmpleados();
    formulario.reset();

    formulario.querySelector('button[type="submit"]').textContent = 'Agregar';
    
    editando = false;
}

function eliminarEmpleado(id) {

    listaEmpleados = listaEmpleados.filter(empleado => empleado.id !== id);

    limpiarHTML();
    mostrarEmpleados();
}

function limpiarHTML() {
    const divEmpleados = document.querySelector('.div-empleados');
    while(divEmpleados.firstChild) {
        divEmpleados.removeChild(divEmpleados.firstChild);
    }
}

document.addEventListener("keyup", e=>{


    if (e.target.matches("#buscador")){
        document.querySelectorAll(".articulo").forEach(tenis =>{

            tenis.textContent.toLowerCase().includes(e.target.value.toLowerCase())
            ?tenis.classList.remove("filtro")
            :tenis.classList.add("filtro")
        })
    }


})