<?php
include_once 'Pasajero.php';
include_once 'Viaje_modif.php';
include_once 'ResponsableV.php';

$objPasajero = new Pasajero('nacho', 'cire', 6516531, 6516516);
$objResponsableV =new ResponsableV (0564126, 65165,'daniel','skdjnsedf');
$objViaje_modif = new Viaje_modif(651 + 6651, 'brasil', 5, $objPasajero, $objResponsableV);

echo cargarInformacion($objPasajero,$objViaje_modif);
echo $objViaje_modif;
echo responsableV($objResponsableV);

function cargarInformacion(Pasajero $objPasajero, Viaje_modif $objViaje_modif) {
    echo "Ingrese el código del viaje: ";
    $codigo = trim(fgets(STDIN));
    $objViaje_modif->setCod($codigo);

    echo "Ingrese el destino de viaje: ";
    $destino = trim(fgets(STDIN));
    $objViaje_modif->setDestino($destino);

    echo "Ingrese la cantidad máxima de pasajeros: ";
    $cantMaxPas = trim(fgets(STDIN));
    $objViaje_modif->setCantMax($cantMaxPas);

    for ($i = 0; $i < $cantMaxPas; $i++) {
        echo "Ingrese el nombre del Pasajero " . ($i + 1) . ": ";
        $nombre = trim(fgets(STDIN));
        $objPasajero->setNombre($nombre);
        echo "Ingrese el apellido del Pasajero " . ($i + 1) . ": ";
        $apellido = trim(fgets(STDIN));
        $objPasajero->setApellido($apellido);
        echo "Ingrese su número de documento " . ($i + 1) . ": ";
        $numeroDocumento = trim(fgets(STDIN));
        echo "Ingrese su número de telefono " . ($i + 1) . ": ";
        $tel = trim(fgets(STDIN));
        $objPasajero->setTelefono($tel);
    
    }
    
    


    echo "Datos cargados!!\n";
}

cargarInformacion($objPasajero, $objViaje_modif);


function responsableV(ResponsableV $objResponsableV){
    echo "Ingrese el nombre del responsable: ";
    $nombre = trim(fgets(STDIN));
    $objResponsableV->setNom($nombre);
    echo "Ingrese el apellido del responsable: ";
    $apellido = trim(fgets(STDIN));
    $objResponsableV->setApellido($apellido);
    echo "Ingrese el numero de licencia del responsable: ";
    $nroLic = trim(fgets(STDIN));
    $objResponsableV->setNumLic($nroLic);
    echo "Ingrese el numero de empleado que tiene el responsable: ";
    $nroEmp = trim(fgets(STDIN));
    $objResponsableV->setNumEmpleado($nroEmp);
}