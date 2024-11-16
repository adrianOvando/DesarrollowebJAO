function menun() {
  fetch("examen2Parcial-1.html")
    .then((response) => response.text())
    .then((data) => {
        principal.innerHTML = "";
      
    });
}




function ejercicio2() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `galeria.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      principal.innerHTML = ajax.responseText;
    }
  }
  ajax.send();
}

function ejercicio3() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `formulario.html`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      principal.innerHTML = ajax.responseText;
    }
  }
  ajax.send();
}

function reng() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `galeria.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      principal.innerHTML = ajax.responseText;
    }
  }
  ajax.send();
}
function enviar() {
  let form = document.querySelector("#form_bil");
  const data = new FormData(form);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", `enviar.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      reng();
    }
  };
  ajax.send(data);
}


