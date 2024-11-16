function ejercicio1() {
  fetch("ejercicio1.html")
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

function ejercicio2() {
  fetch("ejercicio2.html")
    .then((response) => response.text())
    .then((data) => {
      contenido.innerHTML = data;
    });
}

function autenticar() {
  let form = document.querySelector("#form_login");
  const data = new FormData(form);
  fetch("autenticar.php", {
    method: "POST",
    body: data,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.result) {
        getUsers();
      } else {
        alert("Usuario o contraseña incorrectos");
      }
    });
}

function getUsers() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", `listar.php`, false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenido.innerHTML = ajax.responseText;
      //JSON.parse(ajax.responseText);
    }
  };
  ajax.send();
}

function cambiarNivel(nivel, id) {
  fetch(`cambiar_nivel.php?nivel=${nivel}&id=${id}`)
    .then((response) => response.text())
    .then((data) => {
      getUsers();
    });
}

function ejercicio4() {
  fetch(`datos.php`)
    .then((response) => response.json())
    .then((data) => {
      contenido.innerHTML = "";
      let select = document.createElement("select");
      select.id = "libros";
      data.forEach((libro) => {
        let option = document.createElement("option");
        option.value = libro.imagen;
        option.innerHTML = libro.titulo;
        select.appendChild(option);
      });
      contenido.appendChild(select);
      let img = document.createElement("img");
      img.id = "imagen";
      img.style.height = "200px";
      img.src = `images/${data[0].imagen}`;
      contenido.appendChild(img);
      select.addEventListener("change", (e) => {
        let img = document.querySelector("#imagen");
        img.src = `images/${e.target.value}`;
      });
    });
}
