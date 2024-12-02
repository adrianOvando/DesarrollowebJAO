function inicio() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('inicial.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function pregunta2() {
	var contenedor;
	contenedor = document.getElementById('principal');
	fetch('pregunta2.html')
		.then(response => response.text())
		.then(data => {contenedor.innerHTML = data; 
		})
}

function gena() {
	var contenedor;
	contenedor = document.getElementById('cont');
	fetch('pregunta2.html')
		.then(response => response.text())
		.then(data => {contenedor.innerHTML = data; 
		gener();
		})
}

function gener(){
    document.getElementById('generar').addEventListener('click', function() {
      const operacion = document.getElementById('tipoOperacion').value;
      const cantidad = parseInt(document.getElementById('cantidad').value);
      const principal = document.getElementById('cont');
      principal.innerHTML = ''; // Limpiar ejercicios previos

      for (let i = 0; i < cantidad; i++) {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const ejercicio = document.createElement('div');
        ejercicio.classList.add('mb-3');

        // Crear operación y el input para el resultado
        ejercicio.innerHTML = `
          ${num1} ${operacionSimbolo(operacion)} ${num2} = 
          <input type="number" class="resultado" data-correcto="${calcularResultado(num1, num2, operacion)}">
        `;
        principal.appendChild(ejercicio);
      }
    });

    document.getElementById('calificar').addEventListener('click', function() {
      const inputs = document.querySelectorAll('.resultado');

      inputs.forEach(input => {
        const respuesta = parseFloat(input.value);
        const correcto = parseFloat(input.getAttribute('data-correcto'));

        if (respuesta === correcto) {
          input.classList.add('correcto');
          input.classList.remove('incorrecto');
        } else {
          input.classList.add('incorrecto');
          input.classList.remove('correcto');
        }
      });
    });

    // Función para obtener el símbolo de la operación
    function operacionSimbolo(operacion) {
      switch (operacion) {
        case 'suma': return '+';
        case 'resta': return '-';
        case 'multiplicacion': return '*';
        case 'division': return '/';
        default: return '';
      }
    }

    // Función para calcular el resultado de la operación
    function calcularResultado(num1, num2, operacion) {
      switch (operacion) {
        case 'suma': return num1 + num2;
        case 'resta': return num1 - num2;
        case 'multiplicacion': return num1 * num2;
        case 'division': return parseFloat((num1 / num2).toFixed(2));
        default: return 0;
      }
    }
}



function col() {
    const selectElementos = document.getElementById('elementos');
    const inputColor = document.getElementById('color');
    inputColor.addEventListener('input', function() {
        const idSeleccionado = selectElementos.value;
        const elemento = document.getElementById(idSeleccionado);
        if (elemento) {
            elemento.style.backgroundColor = inputColor.value;
        }
    });
}
























/*Con botstrap
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operaciones</title>
  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  <style>
    #principal {
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .correcto {
      background-color: #c8e6c9; 
    }
    .incorrecto {
      background-color: #ffcdd2; 
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center my-4">Operaciones Matemáticas</h1>

    <div class="form-group">
      <label for="tipoOperacion">Seleccione una operación:</label>
      <select id="tipoOperacion" class="form-control">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
      </select>
    </div>

    <div class="form-group">
      <label for="cantidad">Cantidad de ejercicios:</label>
      <input type="number" id="cantidad" class="form-control" value="5" min="1">
    </div>

    <button id="generar" class="btn btn-primary">Generar Ejercicios</button>
    <div id="principal" class="mt-4"></div>

    <button id="calificar" class="btn btn-success mt-3">Calificar</button>
  </div>

  <script>
    document.getElementById('generar').addEventListener('click', function() {
      const operacion = document.getElementById('tipoOperacion').value;
      const cantidad = parseInt(document.getElementById('cantidad').value);
      const principal = document.getElementById('principal');
      principal.innerHTML = ''; // Limpiar ejercicios previos

      for (let i = 0; i < cantidad; i++) {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const ejercicio = document.createElement('div');
        ejercicio.classList.add('mb-3');

        // Crear operación y el input para el resultado
        ejercicio.innerHTML = `
          ${num1} ${operacionSimbolo(operacion)} ${num2} = 
          <input type="number" class="resultado" data-correcto="${calcularResultado(num1, num2, operacion)}">
        `;
        principal.appendChild(ejercicio);
      }
    });

    document.getElementById('calificar').addEventListener('click', function() {
      const inputs = document.querySelectorAll('.resultado');

      inputs.forEach(input => {
        const respuesta = parseFloat(input.value);
        const correcto = parseFloat(input.getAttribute('data-correcto'));

        if (respuesta === correcto) {
          input.classList.add('correcto');
          input.classList.remove('incorrecto');
        } else {
          input.classList.add('incorrecto');
          input.classList.remove('correcto');
        }
      });
    });

    // Función para obtener el símbolo de la operación
    function operacionSimbolo(operacion) {
      switch (operacion) {
        case 'suma': return '+';
        case 'resta': return '-';
        case 'multiplicacion': return '*';
        case 'division': return '/';
        default: return '';
      }
    }

    // Función para calcular el resultado de la operación
    function calcularResultado(num1, num2, operacion) {
      switch (operacion) {
        case 'suma': return num1 + num2;
        case 'resta': return num1 - num2;
        case 'multiplicacion': return num1 * num2;
        case 'division': return parseFloat((num1 / num2).toFixed(2));
        default: return 0;
      }
    }
  </script>
</body>
</html>
*/