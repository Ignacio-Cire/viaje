<?php
class Pasajero
{
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $telefono;

    public function __construct($nomb, $ap, $numDoc, $tel)
    {
        $this->nombre = $nomb;
        $this->apellido = $ap;
        $this->nroDoc = $numDoc;
        $this->telefono = $tel;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getNroDocumento()
    {
        return $this->nroDoc;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setNombre($nomb)
    {
        $this->nombre = $nomb;
    }

    public function setApellido($ap)
    {
        $this->apellido = $ap;
    }

    public function setNroDocumento($numDoc)
    {
        $this->nroDoc = $numDoc;
    }

    public function setTelefono($tel)
    {
        $this->telefono = $tel;
    }

    public function __toString()
    {
        $respuesta = 'Nombre pasajero: ' . $this->getNombre() . "\n";
        $respuesta .= 'Apellido pasajero: ' . $this->getApellido() . "\n";
        $respuesta .= 'Número documento pasajero: ' . $this->getNroDocumento() . "\n";
        $respuesta .= 'Teléfono pasajero: ' . $this->getTelefono() . "\n";

        return $respuesta;
    }
}