<?php
// El nombre de las clases por convencion deben empezar con la primera en mayuscula -> Persona.php
class persona
{
// modificador de acceso -> private - public - protected
// publicos: se puede acceder desde cualquier archivo de proyecto
// privado: solo se accede desde la propia clase
// protected: clases vecinas - hijas (subclases)

// atributos de la clase persona
// el identificador de los atributos se rigen con las normales de las variables (comienzan con $)
    private $nombre;
    private $apellido;
    private $edad;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

// la forma de acceder a esos atributos privados es por medio de los metodos getter a setter
// los setter son los metodos que a traves de el paso de parametros se le asigna un valor cuando se instancia una clase

    public function setNombre($nombre)
    {
        // $this->nombre es el atributo y $name es el valor del atributo que se pasa cuando llamas la funcion
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function pasarMayuscula($texto){
        return strtoupper($texto);
    }

    public function nombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }

    public function mostrarDatos(){
        echo "Nombre: ".$this->pasarMayuscula($this->nombre)."<br>";
        echo "Apellido: ".$this->pasarMayuscula($this->apellido)."<br>";
        echo "Edad: ".$this->edad."<br>";
    }
}

// primero verificamos que tenemos datos para crear el objeto
if (isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["edad"])) {
    $personaF=new persona();
    $personaF->setNombre($_GET["nombre"]);
    $personaF->setApellido($_GET["apellido"]);
    $personaF->setEdad($_GET["edad"]);
    $personaF->mostrarDatos();
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

</body>
<?php
    // creo un objeto llamado $persona1 de la clase persona
    $persona1 = new persona();
    $persona2 = new persona();
    $persona1->setNombre("Sergio");
    $persona1->setApellido("Diaz");
    $persona1->setEdad(18);
    $persona2->setNombre("Isabel");
    $persona2->setApellido("Garcia");
    $persona2->setEdad(24);

    echo "La persona 1 es ".$persona1->getNombre()." ".$persona1->getApellido()." y su edad es ".$persona1->getEdad()." años"."<br>";

    echo "La persona 2 es ".$persona2->getNombre()." ".$persona2->getApellido()." y su edad es ".$persona2->getEdad()." años"."<br>";

    echo "La persona 2 es ".$persona2->nombreCompleto();

?>
<!--$_SERVER -> para que lea la propia pagina de php-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido">
    </p>
    <p>
        <label for="edad">Edad:</label>
        <input type="number" name="edad">
    </p>

    <input type="submit" value="Enviar">
</form>
</html>
