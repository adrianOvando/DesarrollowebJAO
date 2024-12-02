function ejercicio1(boton = "1"){
	var historial;
	historial = document.getElementById('historial');
	var ajax = new XMLHttpRequest()
	ajax.open("get", 'examen2parcial-2.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			historial.innerHTML += `<strong>Boton ${boton}</strong><br>`;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function mostrarBotones() {
	var seccion_botones;
	seccion_botones = document.getElementById('seccion-botones');
	var ajax = new XMLHttpRequest()
	ajax.open("get", 'botones.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
            mostrarDatosEstudiante();
			seccion_botones.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function mostrarDatosEstudiante(){
    var principal;
	principal = document.getElementById('principal');
	var ajax = new XMLHttpRequest()
	ajax.open("get", 'datosEstudiante.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			principal.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function ejercicio2(){
	var principal;
	principal = document.getElementById('principal');
	fetch('tablas.html')
		.then(response => response.text())
		.then(data => {
			principal.innerHTML=data;
			ejercicio1("2");
		}
		);
}
function realizarOperacion(){
    var resultado = document.getElementById("resultado-tabla");
    var ajax = new XMLHttpRequest();
    ajax.open("get", "tablas.html", true);
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4){
            resultado.innerHTML = ajax.responseText;
            var del = document.getElementById("del");
            var radios = document.getElementsByName("operacion");
            for(let i = 0; i < radios.length; i++){
                if(radios[i].checked){
                    operacion = radios[i].value;
                }
            }
            var al = document.getElementById("al");
            html = "";
            switch (operacion) {
                case "suma":
                    for(let i = 1; i <= al.value; i++){
                        html += `<tr><td>${i}</td><td>+</td><td>${del.value}</td><td>=</td><td>${parseInt(i)+parseInt(del.value)}</td></tr>`;
                    }
                    break;
                case "resta":
                    for(let i = 1; i <= al.value; i++){
                        html += `<tr><td>${i}</td><td>-</td><td>${del.value}</td><td>=</td><td>${parseInt(i)-parseInt(del.value)}</td></tr>`;
                    }
                    break;
                case "multiplicacion":
                    for(let i = 1; i <= al.value; i++){
                        html += `<tr><td>${i}</td><td>*</td><td>${del.value}</td><td>=</td><td>${parseInt(i)*parseInt(del.value)}</td></tr>`;
                    }
                    break;
                case "division":
                    for(let i = 1; i <= al.value; i++){
                        html += `<tr><td>${i}</td><td>/</td><td>${del.value}</td><td>=</td><td>${parseInt(i)/parseInt(del.value)}</td></tr>`;
                    }
                    break;
                default:
                    break;
            }
			html += "</tr>"
            resultado.innerHTML = html;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
let indiceImagenActual = 0;
let datosLibros = [];
function ejercicio3(){
	var principal;
	principal = document.getElementById('principal');
	var ajax = new XMLHttpRequest()
	ajax.open("get", 'imagen.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			principal.innerHTML = ajax.responseText;
			ejercicio1("3");
			obtenerDatosLibros();
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
function obtenerDatosLibros() {
    var ajax = new XMLHttpRequest();
    ajax.open("get", 'datos.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datosLibros = JSON.parse(ajax.responseText);
            mostrarImagenActual();
        }
    };
    ajax.setRequestHeader("Content-Type", "application/json; charset=utf-8");
    ajax.send();
}

function mostrarImagenActual() {
    var contenedorImagen = document.getElementById("contenedor-imagen");
    if (indiceImagenActual < datosLibros.length) {
        var libroActual = datosLibros[indiceImagenActual];
        contenedorImagen.innerHTML = `<img src="images/${libroActual.imagen}" style="width: 200px;">`;
    } else {
        contenedorImagen.innerHTML = "<p>No hay más imágenes.</p>";
    }
}

function siguienteImagen() {
    if (indiceImagenActual < datosLibros.length - 1) {
        indiceImagenActual++;
        mostrarImagenActual();
    } else {
        alert("No hay más imágenes para mostrar.");
    }
}

function ejercicio4() {
    var principal = document.getElementById('principal');
    fetch('forminsertar.html')
        .then(response => response.text())
        .then(data => {
			ejercicio1("4");
			principal.innerHTML = data;
		});
}

function insertarLibros() {
    const form = document.getElementById('formInsertar');
    const datos = new FormData(form);

    fetch('createLibro.php', {
        method: 'POST',
        body: datos,
    })
        .then(response => response.text())
        .then(() => listarLibros())
}

function listarLibros() {
    var principal = document.getElementById('principal');
    fetch('listar.php')
        .then(response => response.text())
        .then(data => (principal.innerHTML = data));
}

function ejercicio5() {
    var principal = document.getElementById('principal');
    fetch('colores.html')
        .then(response => response.text())
        .then(data => {
            principal.innerHTML = data;
			ejercicio1("5");
        })
}

function cambiarColor() {
    const seccion = document.getElementById('seccion').value;
    const color = document.getElementById('color').value;

    const elemento = document.getElementById(seccion);
    elemento.style.backgroundColor = color;
}