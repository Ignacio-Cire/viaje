<?php
class ResponsableV{
    private $nroEmpleado;
    private $nroLic;
    private $nombre;
    private $apellido;
    

    public function __construct ($numEmp, $numLic,$nom,$ap){
        $this->nroEmpleado   = $numEmp;
        $this->nroLic = $numLic;
        $this->nombre = $nom;
        $this->apellido = $ap;
    }

    // METODOS GET

    public function getNumEmpleado(){
        return $this->nroEmpleado;

    }
    public function getNumLic(){
        return $this->nroLic;

    }
    public function getNombre(){
        return $this->nombre;

    }
    public function getApellido(){
        return $this->apellido;

    }
    // METODOS SET

    public function setNumEmpleado($numEmp){
        $this->nroEmpleado = $numEmp;
    }
    public function setNumLic($numLic){
        $this->nroLic = $numLic;
    }
    public function setNom($nom){
        $this->nombre = $nom;
    }
    public function setApellido($ap){
        $this->apellido = $ap;
    }


    // Método __toString
    public function __toString() {
        return "Número de empleado: " . $this->getNumEmpleado() . "\n" .
               "Número de licencia: " . $this->getNumLic() . "\n" .
               "Nombre: " . $this->getNombre() . "\n" .
               "Apellido: " . $this->getApellido() . "\n";
    }

    
}

