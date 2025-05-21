<?php

class Vagon{
    private $anioInstalacion;
    private $largo;
    private $ancho;
    private $pesoVagonVacio;

    public function __construct($anioInstalacion, $largo, $ancho, $pesoVagonVacio)
    {
        $this->anioInstalacion = $anioInstalacion;
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->pesoVagonVacio = $pesoVagonVacio;
    }

    public function getAnioInstalacion(){
        return $this->anioInstalacion;
    }
    public function getLargo(){
        return $this->largo;
    }
    public function getAncho(){
        return $this->ancho;
    }
    public function getPesoVagonVacio() {
        return $this->pesoVagonVacio;
    }

    public function setAnioInstalacion($anioInstalacion){
        $this->anioInstalacion = $anioInstalacion;
    }
    public function setLargo($largo){
        $this->largo = $largo;
    }
    public function setAncho($ancho){
        $this->ancho = $ancho;
    }
    public function setPesoVagonVacio($pesoVagonVacio){
        $this->pesoVagonVacio = $pesoVagonVacio;
    }

    public function __toString() {
        return "Año: " . $this->anioInstalacion . "\n" .
        "Largo: " . $this->largo . "m\n" . 
        "Ancho: " . $this->ancho . "m\n" . 
        "Peso vacío: " . $this->pesoVagonVacio . "kg\n";
    }
}