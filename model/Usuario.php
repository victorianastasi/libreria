<?php
class Usuario
{
    private $id;
    private $user;
    private $pass;

    function __construct($id, $user, $pass)
    {
        $this->id = $id;
        $this->user = $user;
        $this->pass = $pass;
    }

    function __construct1($user, $pass)
    {
        $this->user = $user;
        $this->pass = $pass;
    }

    //getters y setters


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
}
