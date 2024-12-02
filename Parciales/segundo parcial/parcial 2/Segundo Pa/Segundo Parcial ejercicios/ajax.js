function mostrar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'tresenraya.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}
var turno = "x";
function marcar(identificador){
    var casilla = document.getElementById(identificador);
	var mensaje = document.getElementById('mensaje');
    if(casilla.innerHTML.trim() == ""){
        casilla.innerHTML = turno;
        if(turno == "x"){
            turno = "o";
        }else{
            turno = "x";
        }
        mensaje.innerHTML = "Turno " + turno;
    }else{
        alert("Casilla ocupada");
    }
}

function ejercicio2(){
    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("get", "tablaOperaciones.html", true);
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function realizarOperacion(){
    var mensaje = document.getElementById("mensaje");
    var ajax = new XMLHttpRequest();
    ajax.open("get", "tablaOperaciones.html", true);
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4){
            mensaje.innerHTML = ajax.responseText;
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
                        html += `${i}+${del.value}=${parseInt(i)+parseInt(del.value)}<br>`;
                    }
                    break;
                case "resta":
                    for(let i = 1; i <= al.value; i++){
                        html += `${i}-${del.value}=${parseInt(i)-parseInt(del.value)}<br>`;
                    }
                    break;
                case "multiplicacion":
                    for(let i = 1; i <= al.value; i++){
                        html += `${i}*${del.value}=${parseInt(i)*parseInt(del.value)}<br>`;
                    }
                    break;
                case "division":
                    for(let i = 1; i <= al.value; i++){
                        html += `${i}/${del.value}=${parseInt(i)/parseInt(del.value)}<br>`;
                    }
                    break;
                default:
                    break;
            }
            mensaje.innerHTML = html;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function ejercicio3(){
    var contenedor;
	contenedor = document.getElementById('contenido');
    mensaje = document.getElementById('mensaje')
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'listar.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
            mensaje.innerHTML = "";
			contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function cambiarNivel(idUsuario, nuevoNivel){
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", `cambiarNivel.php?id=${idUsuario}&nivel=${nuevoNivel}`, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			alert("update correcto en la tabla");
            ejercicio3();
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function ejercicio4() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'listarLibros.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function ordenar(orden) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	ajax = new XMLHttpRequest()
	ajax.open("GET", "read.php?ordenar=" + orden, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}

function ejercicio5(){
    var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'cargadoDatos.html', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText;
            mostrarDatos();
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function mostrarDatos(){
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'datos.php', true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			var datos = JSON.parse(ajax.responseText);

            var lista = document.getElementById("listaLibros");
            var imagen = document.getElementById("imagenLibro");

            datos.forEach(function (libro, index) {
                let elemento = document.createElement("option");
                elemento.value = libro.imagen; 
                elemento.innerHTML = libro.titulo; 
                lista.appendChild(elemento);

                if (index === 0) {
                    imagen.innerHTML = `<img src="images/${libro.imagen}" style="width: 200px;">`;
                }
            });
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function actualizarImagen(){
    var select = document.getElementById("listaLibros");
    var imagen = document.getElementById("imagenLibro");

    var imagenSeleccionada = select.value;

    imagen.innerHTML = `<img src="images/${imagenSeleccionada}" style="width: 200px;">`;
}