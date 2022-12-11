<?php
$id = $_POST["editId"];
$title = $_POST["editTitle"];
$author = $_POST["editAuthor"];
$year = $_POST["editYear"];
$country = $_POST["editCountry"];
$language = $_POST["editLanguage"];
$stock = $_POST["editStock"];

require_once("../dao/LibroDAO.php");
$bookDAO = new LibroDAO();
$guardoOk = $bookDAO->editBook($id, $title, $author, $year, $country, $language, $stock);

if ($guardoOk) {
    header("Location: ../views/editLibroMsgOk.php");
    exit;
} else {
    header("Location: ../views/editLibroMsgError.php");
    exit;
}
