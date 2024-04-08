<?php
/**La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.



 */
class Viaje
{
    private $codigo;
    private $destino;
    private $cantMaxPas;
    private $pasajeros;

    public function __construct($cod, $dest, $cantMax)
    {
        $this->codigo = $cod;
        $this->destino = $dest;
        $this->cantMaxPas = $cantMax;
        $this->pasajeros = array();
        

    }
    /**Realice la implementación de la clase Viaje e implemente los métodos necesarios para     modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”. */

    // ARREGLO ASOCIATIVO PARA OBTENER AL DATOS DEL PASAJERO.
    public function agregarPasajero($nombre, $apellido, $numeroDocumento)
    {
        $pasajero = array(
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Numero de documento" => $numeroDocumento
        );
        $this->pasajeros[] = $pasajero;
    }
   
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

    public function __toString()
    {
        $codigo = $this->getCodigo();
        $destino = $this->getDestino();
        $cantMax = $this->getCantMax();
        $pasajeros = $this->getPasajeros();

         // Cadena con información del viaje
        $infoViaje = "Código: $codigo\n";
        $infoViaje .= "Destino: $destino\n";
        $infoViaje .= "Cantidad máxima de pasajeros: $cantMax\n\n";
        $infoViaje .= "Pasajeros:\n";
        
        // Iterar sobre los pasajeros y agregar su información a la cadena
    foreach ($pasajeros as $pasajero) {
        //arrays asociativo 
        $nombre = $pasajero['Nombre'];
        $apellido = $pasajero['Apellido'];
        $numeroDocumento = $pasajero['Numero de documento'];

        $infoViaje .= "Nombre: $nombre\n";
        $infoViaje .= "Apellido: $apellido\n";
        $infoViaje .= "Documento: $numeroDocumento\n";
        $infoViaje .= "-------------------------\n\n";

    }

    return $infoViaje;
}



    }








