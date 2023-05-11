<?php
// DEFINICION DE CLASE PRODUCTO
class Producto{

    // DEFINICION DE ATRIBUTOS 
    public  $precio = 2.56;
    public  $nombre = "nombre";
    public  $disponible = true;

    // DEFINICION DE METODOS
   public function mostrarNombre(){
        echo "El producto es: ";
        echo $this->nombre;

    }
    public function mostrarPrecio(){
        echo"El precio es: ";
        echo $this->precio;

    }
    public function mostrarDisponible(){
        if($this->disponible){
            echo"Esta disponible";
        }else{
            echo"No esta disponible";
        }

    }
}

//CREACION DE UN OBJETO 
//CREAR UNA INSTANCIA
$mesa = new Producto();

$mesa->nombre= "Mesa";  
$mesa->precio = 500;
$mesa->disponible = false;

echo "<pre>";
var_dump($mesa);
echo "</pre>";

$mesa->mostrarNombre();
echo"<br>";
$mesa->mostrarPrecio();
echo"<br>";
$mesa->mostrarDisponible();


$silla = new Producto();

$silla->nombre= "silla";  
$silla->precio = 500;
$silla->disponible = true;

echo "<pre>";
var_dump($silla);
echo "</pre>";

$silla->mostrarNombre();
echo"<br>";
$silla->mostrarPrecio();
echo"<br>";
$silla->mostrarDisponible();