<?php

class PropiedadInmobiliaria
{
    public $Id;
    public $Direccion;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;

    function __construct($id, $dire, $metro, $ciudad, $valor)
    {
        $this->Id = $id;
        $this->Direccion = $dire;
        $this->MetrosCuadrados = $metro;
        $this->Ciudad = $ciudad;
        $this->Valor = $valor;
    }

    public function  MostrarDatos(){
        echo 'Id: '.$this-> Id.'<br>';
        echo 'Dirección: '.$this-> Direccion.'<br>';
        echo 'Metros cuadrados: '.$this-> MetrosCuadrados.'<br>';
        echo 'Ciudad: '.$this-> Ciudad.'<br>';
        echo 'Valor: '.$this-> Valor.'<br>';
    }

}
