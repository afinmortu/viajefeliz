<?php

require_once ('Pasajeros.php');

class ListaPasajeros{
  
    public $listaPas = [];

    public function agregarPasajero ($nombre, $apellido, $numeroDoc, $telefono){
        $pasajero = new Pasajeros($nombre,$apellido,$numeroDoc,$telefono);
        $this->listaPas[]=$pasajero;
    }

    public function cuentaPasajeros(){
        $numero = count($this->listaPas);
        return $numero;
    }

    public function buscaPasajero ($buscaDni){
        foreach ($this->listaPas as $pasajero) {
            if ($pasajero->getNumeroDoc() == $buscaDni){
                return $pasajero;
            }
        }
        return null;
    }
    
    public function modificaPasajero ($buscaDni,$nuevoDocumento,$nuevoNombre,$nuevoApellido,$nuevoTelefono){
        $pasajero = $this->buscaPasajero($buscaDni);
        if ($pasajero){
            $pasajero->setNumeroDoc($nuevoDocumento);
            $pasajero->setNombre($nuevoNombre);
            $pasajero->setApellido($nuevoApellido);
            $pasajero->setTelefono($nuevoTelefono);
            return TRUE;
        }else{
            return FALSE;
    }

    }

    public function __toString(){
        $output = "   Lista de pasajeros:\n";
        foreach ($this->listaPas as $pasajero){
        $output .= "   Nombre: " . $pasajero->getNombre() . ", ";
        $output .= "   Apellido: " . $pasajero->getApellido() . ",";
        $output .= "   Número de Documento: " . $pasajero->getNumeroDoc() . ",";
        $output .= "   Teléfono: " . $pasajero->getTelefono() . "\n";
    }  
    return $output;
    
}
}
