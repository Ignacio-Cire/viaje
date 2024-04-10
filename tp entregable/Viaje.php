<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 */
class Viaje
{
    private $codigo;
    private $destino;
    private $cantMaxPas;
    private $pasajeros = [];

    public function __construct($cod, $dest, $cantMax,  $pasajeros = [])
    {
        $this->codigo = $cod;
        $this->destino = $dest;
        $this->cantMaxPas = $cantMax;
        $this->pasajeros = $pasajeros;

        

    }
    /**Realice la implementación de la clase Viaje e implemente los métodos necesarios para     modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”. */

    // ARREGLO ASOCIATIVO PARA AGREGAR DATOS DEL PASAJERO.
    public function agregarPasajero($nombre, $apellido, $numeroDocumento)
{
    $pasajero = array(
        "Nombre" => $nombre,
        "Apellido" => $apellido,
        "Numero de documento" => $numeroDocumento
    );
    $this->pasajeros[] = $pasajero; 
}


    // METODO PARA ELIMINAR PASAJEROS
   /**  public function eliminarPasajeroPorIndice($indice)
   * {
    *    // Verificar si el índice es válido y si existe un pasajero en esa posición
     *   if (isset($this->pasajeros[$indice])) {
       *     unset($this->pasajeros[$indice]); // Eliminar el pasajero del arreglo
      *      return true; // Devolver true si se eliminó correctamente
        *} else {
         *   return false; // Devolver false si el índice no es válido o no hay pasajero en esa posición
        *}
    *}
    */
   
    // METODOS GET

    public function getCodigo()
    {
        return $this->codigo;

    }
    public function getDestino()
    {
        return $this->destino;

    }
    public function getCantMax()
    {
        return $this->cantMaxPas;

    }
    public function getPasajeros()
    {
        return $this->pasajeros;

    }
    // METODOS SET

    public function setCod($cod)
    {
        $this->codigo = $cod;
    }
    public function setDestino($dest)
    {
        $this->destino = $dest;
    }
    public function setCantMax($cantMax)
    {
        $this->cantMaxPas = $cantMax;
    }
    public function setPasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;
    }

    /**Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos. */

    // METODO TO STRING PARA MOSTRAR EN EL TEST

    // METODO TO STRING PARA MOSTRAR EN EL TEST
    public function __toString(){
        $pasajeros = $this->getPasajeros();
        $respuesta = "Código del viaje: ".$this->getCodigo()."\n";
        $respuesta .= "Destino: ".$this->getDestino()."\n";
        $respuesta .= "Cantidad máxima de pasajeros: ".$this->getCantMax()."\n";
        $respuesta .= "Pasajeros del viaje: ".count($pasajeros)."\n";
        $respuesta .= "*************\n";
        $respuesta .= "Datos de pasajeros: \n";
    
        foreach ($pasajeros as $pasajero) {
            $respuesta .= "Nombre: ".$pasajero["Nombre"]."\n";
            $respuesta .= "Apellido: ".$pasajero["Apellido"]."\n";
            $respuesta .= "Numero de documento: ".$pasajero["Numero de documento"]."\n";
            $respuesta .= "*************\n";
        }
    
        return $respuesta;
    }
    
}