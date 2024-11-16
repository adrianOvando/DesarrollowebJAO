function ejercicio1() {
  fetch("ejercicio1.php")
    .then((response) => response.text())
    .then((data) => {
      contenido.innerHTML = data;
    });
}

function getCorreos(bandeja) {
  fetch(`mensajes.php?bandeja=${bandeja}`)
    .then((response) => response.text())
    .then((data) => {
      correos.innerHTML = data;
      let buttons = document.querySelectorAll(".ver");
      buttons.forEach((button) => {
        button.addEventListener("click", (e) => {
          showCorreo(e.target.id);
        });
      });
    });
}

overlay.addEventListener("click", () => {
  overlay.style.display = "none";
});

function showCorreo(id) {
  fetch(`mensaje.php?id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      let mensaje = document.querySelector(".mensaje");
      mensaje.innerHTML = data["mensaje"];
      overlay.style.display = "flex";
    });
}

function redactar() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `form_mensaje.html`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      correos.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}

function enviar() {
  let form = document.querySelector("#form_correo");
  const data = new FormData(form);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", `enviar.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      getCorreos("salida");
    }
  };
  ajax.send(data);
}



