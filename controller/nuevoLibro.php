<?php
$title = $_POST["newTitle"];
$author = $_POST["newAuthor"];
$year = $_POST["newYear"];
$country = $_POST["newCountry"];
$language = $_POST["newLanguage"];
$stock = $_POST["newStock"];

require_once("../dao/LibroDAO.php");
$bookDAO = new LibroDAO();
$insertOk = $bookDAO->addBook($title, $author, $year, $country, $language, $stock);

if ($insertOk) {
    header("Location: ../views/nuevoLibroMsgOk.php");
    exit;
} else {
    header("Location: ../views/nuevoLibroMsgError.php");
    exit;
}
