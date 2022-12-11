<?php
class UsuarioDAO
{
    //verificacion de user en tabla usuarios. Devuelve true o false

    public function validarUserYPass($user, $pass)
    {
        require_once("../dataBase/ConexionDB.php");
        //construimos la conexión
        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        //nos conectamos a la db
        $conexionDB->conectar();
        $conexionDB->ejecutar("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'");

        return $conexionDB->cantFilas() == 1;
    }

    /**
     * Busca todo los usuarios de la tabla Usuarios
     * y devuelve un array con Objetos Usuarios
     */
    public function listarUsuarios()
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $result = $conexionDB->ejecutar("SELECT * FROM usuarios");

        while ($usuario = $result->fetch_assoc()) {

            $usuarioObj = new Usuario($usuario["id"], $usuario["user"], $usuario["pass"]);

            $listUsuarios[] = $usuarioObj;
        }

        return $listUsuarios;
    }

    public function listarUsuariosPorNombre($nomb)
    {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM usuarios WHERE user = '$nomb'";
        $result = $conexionDB->ejecutar($sql);

        while ($usu = $result->fetch_assoc()) {
            $usuarioObj = new Usuario($usu["id"], $usu["user"], $usu["pass"]);

            $listUsuarios[] = $usuarioObj;
        }

        if (empty($listUsuarios)) {
            return null;
        } else {
            return $listUsuarios;
        }
    }

    public function addUser($usu, $pass)
    {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "proyecto");
        $conexionDB->conectar();

        $sql = "INSERT INTO usuarios( `user`, `pass`) VALUES ('$usu','$pass')";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }
}
