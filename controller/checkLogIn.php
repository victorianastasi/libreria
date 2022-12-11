<?php
$userInput = $_POST['user'];
$passInput = $_POST['pass'];

//conectamos a la db, verificamos si el user y pass existen en la tabla Usuario, devolviendo true o false

require_once("../dao/UsuarioDAO.php");

$usuDAO = new UsuarioDAO();

$existeUserYPass = $usuDAO->validarUserYPass($userInput, $passInput);

if ($existeUserYPass) {
    header("Location: ../views/inicio.html");
    exit;
} else {
    header("Location: ../views/loginError.html");
    exit;
}
