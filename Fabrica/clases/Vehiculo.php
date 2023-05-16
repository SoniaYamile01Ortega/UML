
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase vehiculo</title>
</head>
<body>
    
<?php

class Vehiculo
{

    public  $numeroCreados;
    public  $recorrdido;
    public  $velocidad;
    public  $numeroRuedas;
    public  $numeroPasajeros;
    public  $marca;
    public  $color;

    /**
     * Default constructor
     */
    public function __construct($numeroCreados,$recorrdido,$velocidad,$numeroRuedas,$numeroPasajeros,$marca, $color)
    {
        $this->numeroCreados = $numeroCreados;
        $this->recorrdido = $recorrdido;
        $this->velocidad = $velocidad;
        $this->numeroRuedas =  $numeroRuedas;
        $this->numeroPasajeros =  $numeroPasajeros;
        $this->marca=$marca;
        $this->color=$color;

    }

   
}

$autobus1 = new vehiculo(012023,0,0,4,16,"Mercedes","Blanco");
echo "El autobus creado es de marca:" .$autobus1->marca;
echo "<br>";

$buseta = new vehiculo(022023,1200,25000,4,30,"Man","Red");
echo "La buseta creado es de marca:" .$buseta->marca;
echo "<br>";

echo "<br>";

$bicicleta = new vehiculo(0302023,0,0,2,2,"Cross","Red");
echo "La buseta creado es de marca:" .$buseta->marca;
echo "<br>";


?>

</body>
</html>

