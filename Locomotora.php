<?php
//Se registra la información de su peso y velocidad máxima.
class Locomotora{
    private $peso;
    private $velMax;

    //Constructor
    public function __construct($peso, $velMax)
    {
        $this->peso = $peso;
        $this->velMax = $velMax;
    }

    //get
    public function getPeso(){
        return $this->peso;
    }
    public function getVelMax(){
        return $this->velMax;
    }

    //set
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setVelMax($velMax){
        $this->velMax = $velMax;
    }

    public function __toString()
    {
        return
        "Peso Locomotora: " . $this->peso . "\n" .
        "Velocidad Máxima: " . $this->velMax . "\n";
    }
}