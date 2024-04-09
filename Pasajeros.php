<?php

class Pasajeros{
    private $nombre;
    private $apellido;
    private $numeroDoc;
    private $telefono;

// metodo constructor

    public function __construct ($nombre, $apellido, $numeroDoc, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDoc = $numeroDoc;
        $this->telefono = $telefono;
    }

//  setter y getter de atributos

    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre (){
        return $this->nombre;    
    }
    public function setApellido ($apellido){
        $this->apellido = $apellido;
    }
    public function getApellido (){
        return $this->apellido;    
    }
    public function setNumeroDoc ($numeroDoc){
        $this->numeroDoc = $numeroDoc;
    }
    public function getNumeroDoc (){
        return $this->numeroDoc;    
    }
    public function setTelefono ($telefono){
        $this->telefono = $telefono;
    }
    public function getTelefono (){
        return $this->telefono;    
    }

}