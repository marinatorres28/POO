<?php

class Coche{
    // creamos los atributos
    private $marca;
    private $modelo;
    private $kilometros;
    private $color;

    /**
     * @param $marca
     * @param $modelo
     * @param $kilometros
     * @param $color
     */

    // metodo constructor
    public function __construct($marca, $modelo, $kilometros, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kilometros = $kilometros;
        $this->color = $color;
    }
    // creamos los get set Generate -> Getters and Setters y seleccionamos todos los atributos
    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getKilometros()
    {
        return $this->kilometros;
    }

    /**
     * @param mixed $kilometros
     */
    public function setKilometros($kilometros): void
    {
        $this->kilometros = $kilometros;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
    // creamos la funcion mostrar datos
    public function mostrarDatos(){
        echo "Marca: ".$this->marca."<br>";
        echo "Modelo: ".$this->modelo."<br>";
        echo "Kilometros: ".$this->kilometros."<br>";
        echo "Color: ".$this->color."<br>";
    }
}


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="marca">Marca:</label>
        <input type="text" name="marca">
    </p>

    <p>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo">
    </p>

    <p>
        <label for="kilometros">Kilometros:</label>
        <input type="text" name="kilometros">
    </p>

    <p>
        <label for="color">Color:</label>
        <input type="text" name="color">
    </p>

    <input type="submit" value="Enviar">
</form>
<?php
// si existen los datos, creamos el objeto con la clase coche y mostramos los datos
if (isset($_GET["marca"]) && isset($_GET["modelo"]) && isset($_GET["kilometros"]) && isset($_GET["color"])){
    $micoche= new coche($_GET["marca"], $_GET["modelo"], $_GET["kilometros"],$_GET["color"]);
    $micoche->mostrarDatos();
}
?>

</body>
</html>
