<?php
session_start();

// Verifica si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contraseña = $_POST["password"];
    
    $usuariosJSON = file_get_contents("users.json");
    $usuarios = json_decode($usuariosJSON, true);

    foreach ($usuarios as $usuarioRegistrado) {
        if ($correo == "admin@root.com" && $contraseña == "root123") {
            // Si el correo y la contraseña son los esperados, inicia sesión y redirige a index_admin.html
            $_SESSION["nombre_usuario"] = "ADMIN";
            $_SESSION["mensaje"] = "Inicio de sesión exitoso.";
            header("Location: index_admin.html"); 
            exit();
        } elseif ($usuarioRegistrado["correo"] == $correo && $usuarioRegistrado["contraseña"] == $contraseña) {
            // Si el usuario y la contraseña coinciden con un usuario registrado, inicia sesión y redirige a index.php
            $_SESSION["nombre_usuario"] = $usuarioRegistrado["nombre"];
            $_SESSION["mensaje"] = "Inicio de sesión exitoso.";
            header("Location: index.php"); 
            exit();
        }
    }
    
    // Si no se encuentra ninguna coincidencia, muestra un mensaje de error
    $_SESSION["mensaje"] = "Usuario o contraseña incorrectos.";
    header("Location: login.php");
    exit();
} else {
    // Si no se ha enviado un formulario, muestra un mensaje de error
    $_SESSION["mensaje"] = "Error: No se ha enviado un formulario.";
    header("Location: login.php"); 
    exit();
}
?>
