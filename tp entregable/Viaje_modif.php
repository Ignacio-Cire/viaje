<?php
class Viaje_modif
{
    private $codigo;
    private $destino;
    private $cantMaxPas;
    private $objPasajero;
    private $objResponsableV;

    public function __construct($cod, $dest, $cantMax, Pasajero $objPasajero,ResponsableV $objResponsableV )
    {
        $this->codigo = $cod;
        $this->destino = $dest;
        $this->cantMaxPas = $cantMax;
        $this->objPasajero = $objPasajero;
        $this->objResponsableV = $objResponsableV;
    }

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
        return $this->objPasajero;
    }

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

    public function setPasajero(Pasajero $objPasajero)
    {
        $this->objPasajero = $objPasajero;
    }

    public function __toString()
    {
        $respuesta = "Código del viaje: " . $this->getCodigo() . "\n";
        $respuesta .= "Destino: " . $this->getDestino() . "\n";
        $respuesta .= "Cantidad máxima de pasajeros: " . $this->getCantMax() . "\n";
        $respuesta .= "Pasajeros del viaje: 1\n"; // Solo hay un pasajero
        $respuesta .= "*************\n";
        $respuesta .= "Datos de pasajeros:\n" . $this->objPasajero . "\n";
        $respuesta .= "Datos del responsable:\n " . $this->objResponsableV . "\n" ;
       

        

        return $respuesta;
    }
}