<?php 

class Rol

/* 1ra parte del modelo de negocio */
{

    /* Atributos: encapsulamiento ( - private, # protected ) */
    private $rolCode;
    private $rolName;
    
    // Metodos:
    /* sobrecarga de contructores (pueden ser varios) */
    public function __construct(){}

    /* Getters y Setters */
    # $rolCode: set()
    public function setRolCode($rolCode) { $this->rolCode = $rolCode; }

    # $rolCode: get()
    public function getRolCode(){ return $this->rolCode; }

    # $rolName: set()
    public function setRolName($rolName) { $this->rolName = $rolName; }

    # $rolName: get()
    public function getRolName() { return $this->rolName; }
    
}

?>