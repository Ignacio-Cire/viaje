<?php
include_once 'Viaje.php';
 
/**$codigo;
    private $destino;
    private $cantMaxPas;
    private $pasajeros; */
$objViaje=new Viaje(0214542,'new york',150 );

// Función para mostrar el menú y gestionar las opciones
function mostrarMenu($objViaje)
{
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
        case '4':
            echo "¡Hasta luego!";
            break;
        default:
            echo "Opción inválida. Por favor, seleccione una opción válida.\n";
            mostrarMenu($objViaje); // Mostrar el menú nuevamente si la opción es inválida
            break;
    }
}

// Función para cargar información del viaje
function cargarInformacion($objViaje)
{
    // Solicitar al usuario la información del viaje
    echo "Ingrese el nuevo código del viaje: ";
    $codigo = trim(fgets(STDIN));
    $objViaje->setCod($codigo);

    echo "Ingrese el nuevo destino de viaje: ";
    $destino = trim(fgets(STDIN));
    $objViaje->setDestino($destino);

    echo "Ingrese la cantidad máxima de pasajeros: ";
    $cantMaxPas = trim(fgets(STDIN));
    $objViaje->setCantMax($cantMaxPas);

    // Solicitar información de cada pasajero
    $pasajerosCargados = false;
    while (!$pasajerosCargados) {
        echo "Ingrese la cantidad de pasajeros: ";
        // Esta función (intval) convierte una cadena en un entero. En este caso, se usa para convertir la cadena ingresada por el usuario (que representa la cantidad de pasajeros) en un número entero.
        $numPasajeros = intval(trim(fgets(STDIN)));
        for ($i = 0; $i < $numPasajeros; $i++) {
            echo "Ingrese el nombre del pasajero " . ($i + 1) . ": ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido del pasajero " . ($i + 1) . ": ";
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el número de documento del pasajero " . ($i + 1) . ": ";
            $documento = trim(fgets(STDIN));

            // Agregar pasajero al viaje
            $objViaje->agregarPasajero($nombre, $apellido, $documento);
        }

        // Preguntar al usuario si desea cargar más pasajeros o realizar otra acción
        echo "¿Desea cargar más pasajeros? (Sí/No): ";
        $respuesta = trim(fgets(STDIN));
        // strtolower()se utiliza para convertir una cadena a minúsculas
        if (strtolower($respuesta) !== 'si') {
            $pasajerosCargados = true; // Si la respuesta no es 'Sí', marcar que se han cargado todos los pasajeros
        }
    }

    // Después de cargar los pasajeros, mostrar un menú de opciones
    mostrarMenu($objViaje);
}





// Función para modificar información del viaje
function modificarInformacion($objViaje)
{
    // Aquí puedes solicitar al usuario que seleccione qué atributo del viaje desea modificar y utilizar los métodos set correspondientes
    echo "que datos desea modificar?";
}

// Función para ver los datos del viaje
function verDatos($objViaje)
{
    // Aquí puedes utilizar el método __toString() de la clase Viaje para mostrar la información completa del viaje
    echo $objViaje;
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


