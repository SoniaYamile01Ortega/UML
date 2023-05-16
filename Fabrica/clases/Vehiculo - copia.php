
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
    public function __construct($numeroCreados,$recorrdido,$velocidad,
    $numeroRuedas,$numeroPasajeros,$marca, $color)
    {
        $this->numeroCreados = $numeroCreados;
        $this->recorrdido = $recorrdido;
        $this->velocidad = $velocidad;
        $this->numeroRuedas =  $numeroRuedas;
        $this->numeroPasajeros =  $numeroPasajeros;
        $this->marca=$marca;
        $this->color=$color;

    }

    /**
     * 
     */
    public function vehiculosCreados()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function totalRecorrido()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function Operation1()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function acelerar()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function detener()
    {
        // TODO implement here
    }

}
?>

</body>
</html>

