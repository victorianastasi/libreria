<?php
class ConexionDB
{
    private $host;
    private $user;
    private $password;
    private $databasename;
    private $conexion;


    function __construct($host, $user, $password, $databasename)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->databasename = $databasename;
    }

    public function conectar()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->databasename);
        if ($this->conexion->connect_errno) {
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    public function cerrar()
    {
        $this->conexion->close();
    }

    public function ejecutar($sql)
    {
        return $this->conexion->query($sql);
    }

    // Devuelve la cantidad de filas
    public function cantFilas()
    {
        return $this->conexion->affected_rows;
    }

    /**
     * Get the value of host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of databasename
     */
    public function getDatabasename()
    {
        return $this->databasename;
    }

    /**
     * Set the value of databasename
     *
     * @return  self
     */
    public function setDatabasename($databasename)
    {
        $this->databasename = $databasename;

        return $this;
    }

    /**
     * Get the value of conexion
     */
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * Set the value of conexion
     *
     * @return  self
     */
    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }
}
