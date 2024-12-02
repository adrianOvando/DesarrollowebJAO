function inicio() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('inicial.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function login() {
  const logconte = document.getElementById('log');
  fetch('login.html')
      .then(response => response.text())
      .then(data => {
          logconte.innerHTML = data;
          const modal = new bootstrap.Modal(document.getElementById('loginModal'));
          modal.show(); 
      });
}


function read() {
  const form = document.querySelector('form'); 
  const formData = new FormData(form); 
  fetch('read.php', {method: 'POST', body: formData})
  .then(response => response.text())
  .then(data => {
      document.getElementById('principal').innerHTML = data; 
  })
}


function pregunta3() {
  const contenido = document.getElementById('principal');
  contenido.innerHTML="";
  contenido.innerHTML=` <div class="row mb-3 d-flex flex-nowrap justify-content-around">
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(0)">Todos</button>
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(1)">Ingeniería en Sistemas de Información</button>
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(2)">licenciatura en Administración de Empresas</button>
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(3)">Ingeniería Industrial</button>
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(4)">Licenciatura en Psicología</button>
      <button class="btn bg-primary" style="color: white; width: auto;" onclick="FiltrarC(5)">Medicina</button>
  </div>`;
  fetch("listar.php")
  .then((response) => response.text())
  .then((data) => {
    contenido.innerHTML += data;
  });
}

function FiltrarC(Id) {

}

function pregunta4() {
  const contenedor = document.getElementById('principal');
  fetch('ecuacion.html')
    .then(response => response.text())
    .then(data => {
      contenedor.innerHTML = data; 
      configurarCalculo(); 
    });
}

function configurarCalculo() {
  const botonCalculo = document.getElementById('calculo');
  const contenedorResultado = document.getElementById('cont');

  botonCalculo.addEventListener('click', () => {
    const a = parseFloat(document.getElementById('val1').value);
    const b = parseFloat(document.getElementById('val2').value);
    const c = parseFloat(document.getElementById('val3').value);

    const discriminante = Math.pow(b, 2) - 4 * a * c;
    let x1, x2;

    if (discriminante >= 0) {
      x1 = (-b + Math.sqrt(discriminante)) / (2 * a);
      x2 = (-b - Math.sqrt(discriminante)) / (2 * a);
      contenedorResultado.innerHTML = `
        <div class="correcto">Raíces reales:</div>
        <p>x1 = ${x1.toFixed(2)}</p>
        <p>x2 = ${x2.toFixed(2)}</p>`;
    } else {
      const parteReal = (-b / (2 * a)).toFixed(2);
      const parteImaginaria = (Math.sqrt(-discriminante) / (2 * a)).toFixed(2);
      contenedorResultado.innerHTML = `
        <div class="incorrecto">Raíces complejas:</div>
        <p>x1 = ${parteReal} + <span style="color: red;">${parteImaginaria}i</span></p>
        <p>x2 = ${parteReal} - <span style="color: red;">${parteImaginaria}i</span></p>`;
    }
  });
}


function pregunta5() {
  const principal = document.getElementById('principal');
  principal.innerHTML = ''; 
  const table = document.createElement('table');
  table.style.margin = 'auto'; 
  table.style.borderCollapse = 'collapse'; 
  table.style.width = '80%'; 
  let selectedColor = null; 
  for (let i = 0; i < 4; i++) {
    const row = document.createElement('tr');
    for (let j = 0; j < 4; j++) {
      const cell = document.createElement('td');
      cell.style.backgroundColor = getRandomColor();
      cell.style.width = '20px'; 
      cell.style.height = '50px'; 
      cell.style.textAlign = 'center'; 
      cell.style.verticalAlign = 'middle'; 
      cell.style.border = '1px solid black'; 
      cell.addEventListener('click', function () {
        selectedColor = cell.style.backgroundColor; 
      });

      row.appendChild(cell);
    }
    table.appendChild(row);
  }

  principal.appendChild(table);
  document.getElementById('navegacion').addEventListener('click', function () {
    if (selectedColor) {
      this.style.backgroundColor = selectedColor;
    }
  });

  document.getElementById('tablaiz').addEventListener('click', function () {
    if (selectedColor) {
      this.style.backgroundColor = selectedColor;
    }
  });

  document.getElementById('pie').addEventListener('click', function () {
    if (selectedColor) {
      this.style.backgroundColor = selectedColor;
    }
  });
}

function getRandomColor() {
  return '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
}

