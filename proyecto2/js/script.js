//Variables
var producto = {
    nombreProducto: "",
    precio: "",
    cantidad: ""
}

// const carrito = [];
const cantidadFig = document.querySelector('.formulario__campo');
const precio = document.querySelector('.mensaje__precio');
const nombreFigura = document.querySelector('.contenedor__texto');

// Modificar el precio según la cantidad de las figuras
function setPrecio() {
    //Cambiar el precio del producto con cada click
    //Validar que sea un numero
    if (isNaN(parseInt(cantidadFig.value))) {
        precio.textContent = "Cantidad no válida";
    } else {
        precio.textContent = producto.precio * cantidadFig.value + "$ MXN";
    }
}

// Guardar el producto
function saveProducto() {
    localStorage.setItem('data', JSON.stringify(producto));
    window.location.href
}

// Función para asignar que producto se va a trabajar
function setProducto() {
    if (nombreFigura.textContent === "Figura Anime de Rem") {
        producto.nombreProducto = "figuraRem";
        producto.precio = "600";
        producto.cantidad = cantidadFig.value;
    }
    if (nombreFigura.textContent == "Figura Anime de Deku") {
        producto.nombreProducto = "figuraDeku";
        producto.precio = "1000";
        producto.cantidad = cantidadFig.value;
    }
    if (nombreFigura.textContent == "Figura Anime de Goku") {
        producto.nombreProducto = "figuraGoku";
        producto.precio = "1200";
        cantidadFig.addEventListener('click', function () {
            producto.cantidad = cantidadFig.value;
        })
    }
    //console.log(producto);
}

// Método para validar el Registro
function validarRegistro() {
    //Validación de campos NO VACÍOS
    if ((document.formReg.nombre.value.length == 0) ||
        (document.formReg.correo.value.length == 0) ||
        (document.formReg.nombreUsuario.value.length == 0) ||
        (document.formReg.contraseña.value.length == 0)) {
        mostrarAlerta("Error: Campo(s) vacío(s)", "error", 1);
        return false;
    }
    //Validación del nombre
    var ernombre = /[a-zA-Z]+$/;
    if (!(ernombre.test(document.formReg.nombre.value))) {
        mostrarAlerta("Nombre no válido", "error", 1);
        return false;
    }
    //Validación del correo
    var ercorreo = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
    if (!(ercorreo.test(document.formReg.correo.value))) {
        mostrarAlerta("Correo no válido", "error", 1);
        return false;
    }
    //Si no hay fallos devolvemos TRUE
    return true;
}

// Método para validar el Login
function validarLogin() {
    //Validación de campos NO VACÍOS
    if ((document.formLogin.correo.value.length == 0) ||
        (document.formLogin.contraseña.value.length == 0)) {
        mostrarAlerta("Error: Campo(s) vacío(s)", "error", 2);
        return false;
    }
    //Validación del correo
    var ercorreo = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
    if (!(ercorreo.test(document.formLogin.correo.value))) {
        mostrarAlerta("Correo no válido", "error", 2);
        return false;
    }
    //Si no hay fallos devolvemos TRUE
    return true;
}

// Método para mostrar una alerta si se encuentra un error en el Login o Registro
function mostrarAlerta(mensaje, tipo, form) {
    //Si hay una alerta previa, entonces no crear otra
    const alertaPrevia = document.querySelector('.alerta');
    if (alertaPrevia) {
        return;
    }
    const alerta = document.createElement('P');
    alerta.textContent = mensaje;
    alerta.classList.add('alerta');

    //Insertar en el HTML
    if (form == 1) {
        //Para el form de registro
        document.formReg.appendChild(alerta);
    } if (form == 2) {
        //Para el form de login
        alerta.classList.add('alerta__dos');
        document.formLogin.appendChild(alerta);
    } if (form == 3) {
        //Para el form de pago
        document.formularioPago.appendChild(alerta);
    }
    //Eliminar la alerta después de 3 segundos
    setTimeout(() => {
        alerta.remove();
    }, 3000);
}

function validarPago() {
    //Validación de campos NO VACÍOS
    if ((document.formularioPago.numTarjeta.value.length == 0) ||
        (document.formularioPago.fechaTarjeta.value.length == 0) ||
        (document.formularioPago.ccvTarjeta.value.length == 0) ||
        (document.formularioPago.nombrePago.value.length == 0) ||
        (document.formularioPago.apellidosPago.value.length == 0) ||
        (document.formularioPago.dirPago.value.length == 0) ||
        (document.formularioPago.codPosPago.value.length == 0) ||
        (document.formularioPago.telPago.value.length == 0)) {
        // alert("Campo(s) vacío(s)");
        mostrarAlerta('Campo(s) vacío(s)', 'error', 3);
        //Si no hay fallos devolvemos TRUE
        return false;
    }
    //Validación para el número de tarjeta
    var ernum = /^[0-9]{16}$/;
    if (!(ernum.test(document.formularioPago.numTarjeta.value))) {
        mostrarAlerta('Número de tarjeta no válido', 'error', 3);
        return false;
    }
    //Validación para la fecha de caducidad
    var erfecha = /^(0?[1-9]|1[1-2])([\/$])([2$])\d{1}$/;
    if (!(erfecha.test(document.formularioPago.fechaTarjeta.value))) {
        mostrarAlerta('Fecha de caducidad no válida', 'error', 3);
        return false;
    }
    //Validación para ccv
    var erccv = /^[0-9]{3}$/;
    if (!(erccv.test(document.formularioPago.ccvTarjeta.value))) {
        mostrarAlerta('Código de seguridad no válido', 'error', 3);
        return false;
    }
    //Validación para el nombre
    var ernombre = /[a-zA-Z]+$/;
    if (!(ernombre.test(document.formularioPago.nombrePago.value))) {
        mostrarAlerta('Nombre no válido', 'error', 3);
        return false;
    }
    //Validación para los apellidos
    var erapellidos = /[a-zA-Z]+$/;
    if (!(erapellidos.test(document.formularioPago.apellidosPago.value))) {
        mostrarAlerta('Apellidos no válidos', 'error', 3);
        return false;
    }
    //Validación para el código postal
    var ercodpos = /^[0-9]{5}$/;
    if (!(ercodpos.test(document.formularioPago.codPosPago.value))) {
        mostrarAlerta('Código postal no válido', 'error', 3);
        return false;
    }
    //Validación para el teléfono
    var ertel = /^[0-9]{10}$/;
    if (!(ertel.test(document.formularioPago.telPago.value))) {
        mostrarAlerta('Teléfono no válido', 'error', 3);
        return false;
    }
    return true;
}