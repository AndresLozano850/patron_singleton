<?php 

echo"<h1>Patron Singleton</h1></br>";
echo" Restringe la inicializacion de una clase a solo un objeto</br>";
Class ClassBaseDatos{
    private static $_instance;
    private function _clone(){}     // Metodo Privado para evitar la creaccion de un objeto desde el exterior de la clase 
    private function _Constru(){}   // Metodo Privado para evitar la creaccion de un objeto desde el exterior de la clase 


    public static function create() // Funcion que nos permite instanciar la Clase o devolvernos el Objeto
    {

        if(!self::$_instance instanceof self)
        self::$_instance =new self();

        return self::$_instance;


    }
    public $usuario='No definido';
}


$conexion1= ClassBaseDatos::create();  //Objeto1
$conexion1 ->usuario='Usuario1</br>';       


// Se realiza un Acceso Global a la clase mediante otra variable
$conexion2= ClassBaseDatos::create(); // Objeto2
echo $conexion2->usuario;
$conexion2->usuario='Usuario Actualizado</br>';
echo $conexion1->usuario;


?>