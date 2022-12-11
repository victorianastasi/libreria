<?php
$user = $_POST["newUser"];
$pass = $_POST["newPass"];

require_once("../dao/UsuarioDAO.php");
$usuDAO = new UsuarioDAO();
$insertOk = $usuDAO->addUser($user, $pass);

if ($insertOk) {
    header("Location: ../views/altaMsgOk.php");
    exit;
} else {
    header("Location: ../views/altaMsgError.php");
    exit;
}
