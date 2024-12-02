function inicio() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('inicial.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}