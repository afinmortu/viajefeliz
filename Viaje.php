<?php

class Viaje{
    private $codigo;
    private $destino;
    private $cantPasajeros;
  
// metodo constructor

    public function __construct ($codigo, $destino, $cantPasajeros){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantPasajeros = $cantPasajeros;
    }

// getter y setter de atributos

    public function setCodigo ($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo (){
        return $this->codigo;    
    }
    public function setDestino ($destino){
        $this->destino = $destino;
    }
    public function getDestino (){
        return $this->destino;    
    }
    public function setCantPasajeros ($cantPasajeros){
        $this->cantPasajeros = $cantPasajeros;
    }
    public function getCantPasajeros (){
        return $this->cantPasajeros;    
    }

    public function modificaViaje($codigo, $destino, $cantPasajeros){
        $this->codigo=$codigo;
        $this->destino=$destino;
        $this->cantPasajeros=$cantPasajeros;
    }
   
    public function __toString(){
        return "   Codigo de viaje: ".$this->codigo."\n".
        "   Destino: ".$this->destino."\n".
        "   Cantidad de pasajeros: ".$this->cantPasajeros."\n";
    }

}