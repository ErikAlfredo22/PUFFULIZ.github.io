<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Catalogo.css">
    <title>Usuarios</title>
</head>

<body>
    <!--Nav-->
    <header class="p-3 d-flex flex-column flex-md-row justify-content-between align-items-center border-bottom" style="background-color: black;">
        <a href="index_admin.html">
            <h5 class="mt-1 title text-white">Regresar</h5>
           
        </a>
    </header>
    <br>
    <br><br><br>
    <div>
        <div class="tablita">
          <table class="tabla" id="tabla">
            <thead>
              <tr class="column">
                <th style="background-color: black;">Nombre</th>
                <th style="background-color: black;">Correo</th>
                <th style="background-color: black;">Contraseña</th>
              </tr>
              <center></center>
            </thead>
            <tbody id="res">
            </tbody>
          </table>
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              cargarDatos();
            });
            function cargarDatos() {
              const xhr = new XMLHttpRequest();
              xhr.open('GET', 'users.json', true);
              xhr.onload = function () {
                if (this.status === 200) {
                  const productos = JSON.parse(this.responseText);
                  mostrarDatos(productos);
                }
              }
              xhr.send();
            }
            function mostrarDatos(datos) {
              let res = document.querySelector('#res');
              res.innerHTML = '';
              for (let item of datos) {
                res.innerHTML += "<tr><td> <center>" + item.nombre + "</center></td><td><center>" + item.correo + "</center></td><td><center>$" + item.contraseña + "</center></td></tr>";
              }
            }
          </script>
        </div>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>