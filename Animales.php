<?php

class Animales
{
    private $nombre;
    private $edad;
    private $peso;
    private $raza;

    // metodo constructor

    /**
     * @param $edad
     * @param $nombre
     * @param $peso
     * @param $raza
     */
    public function __construct($edad, $nombre, $peso, $raza)
    {
        $this->edad = $edad;
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->raza = $raza;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * @param mixed $raza
     */
    public function setRaza($raza): void
    {
        $this->raza = $raza;
    }

    public function mostrarDatos(){
        return "Nombre del animal: ".$this->nombre."<br>Edad: ". $this->edad." <br>Raza: ".$this->raza . " <br>Peso: ".$this->peso . " kilos";
    }
}

$miPerro=new Animales("8","Misifu","4","Agora Turco");
// mostramos lo que retorna el metodo mostrarDatos
echo $miPerro->mostrarDatos();
// mostramos solo un dato
// echo $miPerro->getEdad();
// como se la clase que esta utilizando el objeto -> getClass()
echo "<br>La clase que uso para ".$miPerro->getNombre()." es ". get_class($miPerro);