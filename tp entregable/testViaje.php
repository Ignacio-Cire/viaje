<?php
include_once 'Viaje.php';
 

$objViaje=new Viaje(0,'no ha colocado destino',0 );

// Función para mostrar el menú y gestionar las opciones
function mostrarMenu($objViaje){

    do {
    
    
    echo "Menú:\n";
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar información del viaje\n";
    echo "3. Ver datos del viaje\n";
    echo "4. Salir\n";
    echo "Seleccione una opción: ";
    

    $opcion = trim(fgets(STDIN)); // Leer la opción ingresada por el usuario

    switch ($opcion) {
        case '1':
            cargarInformacion($objViaje);
            break;
        case '2':
            modificarInformacion($objViaje);
            break;
        case '3':
            verDatos($objViaje);
            break;

            default:
            if (($opcion>4) || ($opcion>=0)){
                
                echo "Opción inválida. Por favor, seleccione una opción válida.\n";
                echo "---------------------------------------------------.\n";
            
            }
    
            break;    
        
    }
     } while ($opcion != 4);
        if ($opcion==4) {
            echo 'hasta la proxima!!';
        }
        
    
     
    
    
}


//CASO 1
// Función para cargar información del viaje
// Función para cargar información del viaje
function cargarInformacion($objViaje){
    // Solicitar al usuario la información del viaje
    echo "Ingrese el código del viaje: ";
    $codigo = trim(fgets(STDIN));
    $objViaje->setCod($codigo);

    echo "Ingrese el destino de viaje: ";
    $destino = trim(fgets(STDIN));
    $objViaje->setDestino($destino);

    

    echo "Ingrese la cantidad máxima de pasajeros: ";
    $cantMaxPas = trim(fgets(STDIN));
    $objViaje->setCantMax($cantMaxPas);

    // Solicitar información de cada pasajero
    $pasajerosCargados = false;
    while (!$pasajerosCargados) {
        // Solicitar información de cada pasajero
        do {
            echo "Ingrese el numero de pasajeros: ";
            $pasajeros = trim(fgets(STDIN));
            if ($pasajeros > $cantMaxPas) {
                echo "Error, excede la cantidad máxima de Pasajeros.\n";
                echo "Intentelo de nuevo. \n";
            } else {
                for ($i=0; $i < $pasajeros; $i++) {
                    echo "Ingrese el nombre del Pasajero ".($i+1).": ";
                    $nombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido del Pasajero ".($i+1).": ";
                    $apellido = trim(fgets(STDIN));
                    echo "Ingrese su número de documento ".($i+1).": ";
                    $numeroDocumento = trim(fgets(STDIN));
                    // SE VAN AGREGANDO PASAJEROS A LA FUNCION agregarPasajero()
                    $objViaje->agregarPasajero($nombre, $apellido, $numeroDocumento);
                    echo "\n";
                }
                echo "Datos cargados!!\n";
                $pasajerosCargados = true;
            }
        } while($pasajeros > $cantMaxPas);
    }
}



// MODIFICAR DATOSS (CASO 2)

// Función para modificar información del viaje
function modificarInformacion($objViaje){
    while (true) {
        echo "Qué dato desea modificar?\n";
        echo "Datos:\n";
        echo "1. Código del viaje\n";
        echo "2. Destino del viaje\n";
        echo "3. Cantidad máxima de pasajeros\n";
        echo "4. Cantidad de pasajeros\n";
        echo "5. Salir\n";
        echo "Seleccione una opción: ";
    
        $opcion = trim(fgets(STDIN)); // Leer la opción ingresada por el usuario (1,2,3,4,5...etc)
    
        switch ($opcion) {
            case '1':
                echo "Ingrese el nuevo código del viaje: ";
                $codigo = trim(fgets(STDIN));
                $objViaje->setCod($codigo);
                echo "Código modificado a: " . $codigo . "\n";
                break;
            case '2':
                echo "Ingrese el nuevo destino de viaje: ";
                $destino = trim(fgets(STDIN));
                $objViaje->setDestino($destino);
                echo "Destino modificado a: " . $destino . "\n";
                break;
            case '3':
                echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                $cantMaxPas = trim(fgets(STDIN));
                $objViaje->setCantMax($cantMaxPas);
                echo "Cantidad máxima de pasajeros modificada a: " . $cantMaxPas . "\n";
                break;
                

                case '4':
                    echo "Ingrese la nueva cantidad de pasajeros: ";
                    $nuevaCantidadPasajeros = intval(trim(fgets(STDIN)));
                    
                    // Obtener la cantidad actual de pasajeros
                    $cantidadActualPasajeros = $objViaje->getCantMax();

                    
                    
                    if ($nuevaCantidadPasajeros > $cantidadActualPasajeros) {
                        // Si la nueva cantidad es mayor a la actual, solicitar información para los nuevos pasajeros
                        $pasajerosNuevos = $nuevaCantidadPasajeros - $cantidadActualPasajeros;
                        
                        for ($i = 0; $i < $pasajerosNuevos; $i++) {
                            echo "Ingrese el nombre del pasajero " . ($i + 1) . ": ";
                            $nombre = trim(fgets(STDIN));
                            echo "Ingrese el apellido del pasajero " . ($i + 1) . ": ";
                            $apellido = trim(fgets(STDIN));
                            echo "Ingrese el número de documento del pasajero " . ($i + 1) . ": ";
                            $documento = trim(fgets(STDIN));
                            
                            // Agregar pasajero al viaje
                            $objViaje->agregarPasajero($nombre, $apellido, $documento);
                        }
                    } elseif ($nuevaCantidadPasajeros < $cantidadActualPasajeros) {
                        // Si la nueva cantidad es menor a la actual, eliminar los pasajeros adicionales
                        $pasajerosEliminar = $cantidadActualPasajeros - $nuevaCantidadPasajeros;
                        
                        for ($i = 0; $i < $pasajerosEliminar; $i++) {
                            // Eliminar el último pasajero agregado (último elemento del array de pasajeros)
                            $objViaje->eliminarUltimoPasajero();
                        }
                    }
                    
                    // Actualizar la cantidad de pasajeros en el objeto
                    $objViaje->getCantMax($nuevaCantidadPasajeros);
                    echo "Cantidad de pasajeros modificada a: " . $nuevaCantidadPasajeros . "\n";
                    break;
                
        
                

                break;
            case '5':
                echo "Volviendo al menú principal...\n";
                return; // Salir de la función y volver al menú principal
            default:
                echo "Opción inválida. Por favor, seleccione una opción válida.\n";
                break;
        }

        echo "¿Desea modificar más datos? (Sí/No): ";
        // strtolower pone toda letras en min
        $respuesta = strtolower(trim(fgets(STDIN)));
        if ($respuesta !== 'si') {
            echo "Volviendo al menú principal...\n";
            break; //'break' para salir del bucle mientras
        }
    }
}






// FUNCION VER DATOS CASO 3
function verDatos($objViaje)
{
    $pasajeros = $objViaje->getPasajeros(); // Obtener pasajeros
    if (empty($pasajeros)) { // Verificar si no hay pasajeros
        echo "----------------------\n";
        echo "NO HAY PASAJEROS REGISTRADOS\n";
    } else {
        echo $objViaje;
    }
}


// Mostrar el menú inicial
mostrarMenu($objViaje);








/**
* // Agregar un pasajero al objViaje, se pueden agregar mas de la misma manera abajo
*$objViaje->agregarPasajero("Juan", "Pérez", 12345678); 
*$objViaje->agregarPasajero("raul", "cuca", 98654135.21); 
*$objViaje->agregarPasajero("pedro", "plus", 532102010); 
*$objViaje->agregarPasajero("nina", "tingi", 524521030.55); 

*echo $objViaje;
 */
