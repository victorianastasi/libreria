<?php
class LibroDAO
{
    public function listarLibros()
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $result = $conexionDB->ejecutar("SELECT * FROM libros");

        while ($libro = $result->fetch_assoc()) {

            $libroObj = new Libro($libro["id"], $libro["titulo"], $libro["autor"], $libro["anio"], $libro["pais"], $libro["idioma"], $libro["stock"]);

            $listBooks[] = $libroObj;
        }

        return $listBooks;
    }

    public function listarLibrosPorTitulo($nomb)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM libros WHERE titulo = '$nomb'";
        $result = $conexionDB->ejecutar($sql);

        while ($libro = $result->fetch_assoc()) {
            $libroObj = new Libro($libro["id"], $libro["titulo"], $libro["autor"], $libro["anio"], $libro["pais"], $libro["idioma"], $libro["stock"]);

            $listBooks[] = $libroObj;
        }

        if (empty($listBooks)) {
            return null;
        } else {
            return $listBooks;
        }
    }

    public function listarLibrosPorAutor($nomb)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM libros WHERE autor = '$nomb'";
        $result = $conexionDB->ejecutar($sql);

        while ($libro = $result->fetch_assoc()) {
            $libroObj = new Libro($libro["id"], $libro["titulo"], $libro["autor"], $libro["anio"], $libro["pais"], $libro["idioma"], $libro["stock"]);

            $listBooks[] = $libroObj;
        }

        if (empty($listBooks)) {
            return null;
        } else {
            return $listBooks;
        }
    }

    public function listarLibrosPorStock($stock)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM libros WHERE stock < $stock";
        $result = $conexionDB->ejecutar($sql);

        while ($libro = $result->fetch_assoc()) {
            $libroObj = new Libro($libro["id"], $libro["titulo"], $libro["autor"], $libro["anio"], $libro["pais"], $libro["idioma"], $libro["stock"]);

            $listBooks[] = $libroObj;
        }

        if (empty($listBooks)) {
            return null;
        } else {
            return $listBooks;
        }
    }

    public function addBook($title, $author, $year, $country, $language, $stock)
    {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "INSERT INTO libros( `titulo`, `autor`, `anio`, `pais`, `idioma`, `stock`) VALUES ('$title', '$author', $year, '$country', '$language', $stock)";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function getLibroPorID($idLibro)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM libros WHERE id = $idLibro";
        $result = $conexionDB->ejecutar($sql);

        while ($libro = $result->fetch_assoc()) {
            $libroObj = new Libro($libro["id"], $libro["titulo"], $libro["autor"], $libro["anio"], $libro["pais"], $libro["idioma"], $libro["stock"]);

            $listBooks[] = $libroObj;
        }
        return $listBooks;
    }

    public function editBook($id, $title, $author, $year, $country, $language, $stock)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "UPDATE libros SET `titulo` = '$title', `autor` = '$author', `anio` = $year, `pais` = '$country', `idioma`= '$language', `stock` = $stock WHERE `id` = '$id'";


        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function deleteBook($id)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Libro.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "DELETE FROM libros WHERE `id` = '$id'";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }
}
