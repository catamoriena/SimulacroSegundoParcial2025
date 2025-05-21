<?php

class Formacion {
    private $locomotora;
    private $vagones;

    public function __construct($locomotora, $vagones) {
        $this->locomotora = $locomotora;
        $this->vagones = $vagones; // array de Vagon
    }

    public function getLocomotora(){
        return $this->locomotora;
    }
    public function getVagones(){
        return $this->vagones;
    }

    public function setLocomotora($locomotora){
        $this->locomotora = $locomotora;
    }
    public function setVagones($vagones){
        $this->vagones = $vagones;
    }

    public function pesoTotalFormacion() {
        $peso = $this->locomotora->getPeso();
        foreach ($this->vagones as $vagon) {
            $peso += $vagon->calcularPesoVagon();
        }
        return $peso;
    }

    public function puedeAvanzar() {
        return $this->locomotora->getVelMax() >= $this->pesoTotalFormacion();
    }

    public function __toString() {
        $info = $this->locomotora . "\n";
        foreach ($this->vagones as $i => $vagon) {
            $info .= "--- Vagón " . ($i + 1) . " ---\n" . $vagon . "\n";
        }
        $info .= "Peso total formación: {$this->pesoTotalFormacion()}kg\n";
        $info .= "Puede avanzar: " . ($this->puedeAvanzar() ? "SÍ" : "No") . "\n";
        return $info;
    }
}