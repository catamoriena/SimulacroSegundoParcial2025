<?php

class VagonCarga extends Vagon{
    private $pesoCargaMaxima;
    private $pesoCargaActual;
    private $indiceCarga;

    
    public function __construct($anioInstlacion, $largo, $ancho, $pesoVagonVacio, $pesoCargaMaxima, $pesoCargaActual)
    {
        parent::__construct($anioInstlacion, $largo, $ancho, $pesoVagonVacio);
        $this->pesoCargaMaxima = $pesoCargaMaxima;
        $this->pesoCargaActual = $pesoCargaActual;
        $this->indiceCarga = $this->pesoCargaActual * 0.2;
    }

    public function getPesoCargaMaxima(){
        return $this->pesoCargaMaxima;
    }
    public function getPesoCargaActual(){
        return $this->pesoCargaActual;
    }

    public function setPesoCargaMaxima($pesoCargaMaxima){
        $this->pesoCargaMaxima = $pesoCargaMaxima;
    }
    public function setpesoCargaActual($pesoCargaActual){
        $this->pesoCargaActual = $pesoCargaActual;
    }

    public function incorporarCargaVagon($cantidad) {
        if ($this->pesoCargaActual + $cantidad <= $this->pesoCargaMaxima) {
            $this->pesoCargaActual += $cantidad;
            $this->indiceCarga = $this->pesoCargaActual * 0.2;
            return true;
        } else {
            return false;
        }
    }

    public function calcularPesoVagon() {
        return $this->getPesoVagonVacio() + $this->pesoCargaActual + $this->indiceCarga;
    }

    public function __toString() {
        return parent::__toString() .
               "Tipo: Carga\n" . 
               "Carga: " . $this->pesoCargaActual . " / " . $this->pesoCargaMaxima . "kg\n" . 
               "Índice: " . $this->indiceCarga . "kg\n" . 
               "Peso total: " . $this->calcularPesoVagon() . "kg\n";
    }
}