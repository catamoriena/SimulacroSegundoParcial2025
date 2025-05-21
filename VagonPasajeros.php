<?php

class VagonPasajeros extends Vagon{
    private $cantMaxPasajeros;
    private $cantPasajeros;
    private $pesoPromedioPasajeros;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVagonVacio, $cantMaxPasajeros, $cantPasajeros)
    {
        parent::__construct($anioInstalacion, $largo, $ancho, $pesoVagonVacio);
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->cantPasajeros = $cantPasajeros;
        $this->pesoPromedioPasajeros = 50;
    }

    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getCantPasajeros(){
        return $this->cantPasajeros;
    }

    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setCantPasajeros($cantPasajeros){
        $this->cantPasajeros = $cantPasajeros;
    }

     public function incorporarPasajeroVagon($cantidad) {
        if ($this->cantPasajeros + $cantidad <= $this->cantMaxPasajeros) {
            $this->cantPasajeros += $cantidad;
            return true;
        } else {
            return false;
        }
    }

    public function calcularPesoVagon() {
        return $this->getPesoVagonVacio() + ($this->cantPasajeros * $this->pesoPromedioPasajeros);
    }

    public function __toString() {
        return parent::__toString() .
               "Tipo: Pasajeros\n" . 
               "Pasajeros: " . $this->cantPasajeros . " / " . $this->cantMaxPasajeros . "\n" . 
               "Peso total: " . $this->calcularPesoVagon() . "kg\n";
    }
}