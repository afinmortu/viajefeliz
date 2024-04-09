<?php

require_once ('Viaje.php');
require_once ('Pasajeros.php');
require_once ('ListaPasajeros.php');
require_once ('ResponsableV.php');

// Creo un nuevo objeto viaje

$viaje1 = new Viaje("B1","Bariloche",20);

// Creo un nuevo objeto responsable

$responsable1 = new ResponsableV("13522","Juan Carlos","Altavista","23443");

// Creo un nuevo objeto lista de pasajeros

$listaPasajeros = new ListaPasajeros();

    $listaPasajeros->agregarPasajero("Juan", "Pérez", 12345678,2995476337);
    $listaPasajeros->agregarPasajero("María", "Gómez", 87654321,2994198198);
    $listaPasajeros->agregarPasajero("Ricardo", "Ruben", 25911518,2995476777);
    $listaPasajeros->agregarPasajero("Juan", "De las pelotas", 87654321,29895195198);

$i=0;
do{

    echo "\n*************************************************\n";
    echo "*                VIAJE FELIZ                    *\n";
    echo "*                                               *\n";
    echo "*  MENU DE OPCIONES                             *\n";
    echo "*                                               *\n";
    echo "* 1- Mostrar viaje                              *\n";
    echo "* 2- Modificar viaje                            *\n";
    echo "* 3- Mostrar pasajeros                          *\n";
    echo "* 4- Modificar pasajero                         *\n";
    echo "* 5- Agregar pasajero                           *\n";
    echo "* 6- Mostrar responsable                        *\n";
    echo "* 7- Modificar responsable de viaje             *\n";
    echo "* 8- Salir                                      *\n";
    echo "*************************************************\n";
    
    $i=trim(fgets(STDIN));
    echo"\n";
    
    switch ($i) {
        case 1:
            echo $viaje1;
            break;
        case 2:
            echo "Codigo de nuevo viaje: ";
            $codigoNuevoV=trim(fgets(STDIN));
            echo "Destino de nuevo viaje: ";
            $destinoNuevoV=trim(fgets(STDIN));
            echo "Cantidad de pasajeros: ";
            $cantPasajerosNuevoV=trim(fgets(STDIN));
            $pasajerosEnEsteViaje = $listaPasajeros->cuentaPasajeros();
            if ($cantPasajerosNuevoV>=$pasajerosEnEsteViaje){
// de control                echo "ok";
                $viaje1->modificaViaje($codigoNuevoV, $destinoNuevoV, $cantPasajerosNuevoV);
            }else{
                echo "****** ATENCION ****** Pasajeros en lista superan maximo, vuelva a intentar ******\n";
            }

// de control            echo $viaje1;

            break;
        case 3:
            echo $listaPasajeros;
            break;
        case 4:
            echo"Ingrese dni de pasajero a modificar: ";
            $buscaDni = trim(fgets(STDIN));
            $listaPasajeros -> buscaPasajero($buscaDni);
            if ($listaPasajeros->buscaPasajero($buscaDni) !== null){
                echo "Nuevo nombre: ";
                $nuevoNombre=trim(fgets(STDIN));
                echo "Nuevo apellido: ";
                $nuevoApellido=trim(fgets(STDIN));
                echo "Nuevo Dni: ";
                $nuevoDocumento=trim(fgets(STDIN));
                echo "Nuevo Telefono: ";
                $nuevoTelefono=trim(fgets(STDIN));
                $listaPasajeros->modificaPasajero($buscaDni,$nuevoDocumento,$nuevoNombre,$nuevoApellido,$nuevoTelefono);

// de control                echo $listaPasajeros;          

            }else{
                echo "****** ATENCION ****** Pasajero no encontrado en este viaje ******\n";
            }
            break;
        case 5:
            $pasajerosEnEsteViaje = $listaPasajeros->cuentaPasajeros();
            $maximoNumeroPasajeros = $viaje1->getCantPasajeros();
            if ($pasajerosEnEsteViaje<$maximoNumeroPasajeros){
                echo "Ingrese dni de nuevo pasajero: ";
                $buscaDni =trim(fgets(STDIN));
                $listaPasajeros -> buscaPasajero($buscaDni);
                if ($listaPasajeros->buscaPasajero($buscaDni) !== null){
                    echo "****** ATENCION ****** Pasajero ya registrado en este viaje ******\n";
                }else{
                    $nuevoDocumento=$buscaDni;
                    echo "Nombre de nuevo pasajero: ";
                    $nuevoNombre=trim(fgets(STDIN));
                    echo "Apellido de nuevo pasajero: ";
                    $nuevoApellido=trim(fgets(STDIN));
                    echo "Telefono de nuevo pasajero: ";
                    $nuevoTelefono=trim(fgets(STDIN));
                    $listaPasajeros->agregarPasajero ($nuevoNombre,$nuevoApellido,$nuevoDocumento,$nuevoTelefono);

// de control                    echo $listaPasajeros;          

            }
        }else{
            echo "****** ATENCION ****** El viaje esta completo, no puede ingresar un nuevo pasajero ******\n";
        }
            break;
        case 6:
            echo $responsable1;
            break;
        case 7:
            echo "Legajo de nuevo responsable: ";
            $legajoNuevoR=trim(fgets(STDIN));
            echo "Nombre de nuevo responsable: ";
            $nombreNuevoR=trim(fgets(STDIN));
            echo "Apellido de nuevo resposable: ";
            $apellidoNuevoR=trim(fgets(STDIN));
            echo "Licencia de nuevo responsable: ";
            $licenciaNuevoR=trim(fgets(STDIN));
            $responsable1->modificaResponsable($legajoNuevoR,$nombreNuevoR,$apellidoNuevoR,$licenciaNuevoR);

// de control            echo $responsable1;

            break;
        case 8:
            echo "Gracias por participar...\n";
            break;
    }  
}while ($i <> 8);   


