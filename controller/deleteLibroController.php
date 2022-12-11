<?php
$id = $_POST["deleteId"];

require_once("../dao/LibroDAO.php");
$bookDAO = new LibroDAO();
$deleteOk = $bookDAO->deleteBook($id);

if ($deleteOk) {
    header("Location: ../views/deleteLibroOk.php");
    exit;
} else {
    header("Location: ../views/deleteLibroError.php");
    exit;
}
