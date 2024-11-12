function cargarcontenido(abrir) {
var contenedor;
contenedor=document.getElementById("contenido");
fetch(abrir)
    .then(response => response.text());
    .then(data => contenedor.innerHTML=data);
}
cargarcontenido("calen.php?mes=1%anio=2020")

function cambiar(){
    mes=document.getElementById("mes").value;
    anio=document.getElementById("anio").value;
    cargar
}