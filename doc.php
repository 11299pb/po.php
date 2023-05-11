<?php
// DEFINICION DE CLASE PRODUCTO
class Producto{

    // DEFINICION DE ATRIBUTOS 
    public  $precio = 2.56;
    public  $nombre = "nombre";
    public  $disponible = true;

    // DEFINICION DE METODOS
   public function mostrarNombre(){
        echo $this->nombre;

    }
}

//CREACION DE UN OBJETO 
//CREAR UNA INSTANCIA
$mesa = new Producto();

$mesa->nombre= "Mesa";
$mesa->precio = 500;
$mesa->disponible = true;


echo "<pre>";
var_dump($producto1);
echo "</pre>";

$mesa->mostrarNombre();
$mesa->mostrarNombre();