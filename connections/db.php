<?php

/**
 * Created by PhpStorm.
 * User: alexj
 * Date: 25-03-2016
 * Time: 21:39
 * @property  _instance
 * @property DataBase _instance
 */

Class DataBase
{
    private $servidor='localhost';
    private $usuario='root';
    private $password='';
    private $base_datos='balmetal_app';
    private $link;
    private $resultado;
    private $array;
    static $_instance;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct(){
        $this->conectar();
    }

    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }

    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    /**
     * @return DataBase
     */
    public static function getInstance(){
        if (!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /*Realiza la conexión a la base de datos.*/
    private function conectar(){
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->password);
        mysqli_select_db($this->link, $this->base_datos);
        @mysqli_query("SET NAMES 'utf8'");
    }

    /*Método para ejecutar una sentencia sql*/
    public function ejecutar($sql){
        $this->resultado = mysqli_query($this->link, $sql);
        return $this->resultado;
    }

    /*Método para obtener una fila de resultados de la sentencia sql*/
    public function obtener_fila($resultado, $fila){
        if ($fila==0){
            $this->array = mysqli_fetch_array($resultado);
        }else{
            mysqli_data_seek($resultado,$fila);
            $this->array = mysqli_fetch_array($resultado);
        }
        return $this->array;
    }

    //Devuelve el último id del insert introducido
    public function lastID(){
        return mysqli_insert_id($this->link);
    }

    function desconectar($conexion)
    {
        mysqli_close($conexion);
    }


    function obtener_resultados($resultado)
    {
        return mysqli_fetch_array($resultado, MYSQL_ASSOC);
    }
}
