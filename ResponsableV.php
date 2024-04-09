<?php

class ResponsableV{
    private $legajo;
    private $nombre;
    private $apellido;
    private $licencia;

// metodo constructor

    public function __construct ($legajo, $nombre, $apellido, $licencia){
        $this->legajo = $legajo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->licencia = $licencia;
    }

//  setter y getter de atributos
    public function setLegajo ($legajo){
        $this->legajo = $legajo;
    }
    public function getLegajo (){
        return $this->legajo;    
    }
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
    public function setLicencia ($licencia){
        $this->licencia = $licencia;
    }
    public function getLicencia (){
        return $this->licencia;    
    }
   
    public function modificaResponsable($legajo, $nombre, $apellido, $licencia){
        $this->legajo=$legajo;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->licencia=$licencia;
    }
    public function __toString(){
        return "   Legajo: ".$this->legajo."\n   Nombre y apellido: ".$this->nombre." ".$this->apellido."\n   Licencia: ".$this->licencia."\n";
    }

}