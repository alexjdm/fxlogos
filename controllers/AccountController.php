<?php
/*Incluimos el fichero de la clase*/
require_once 'connections/db.php';
require_once 'helpers/CommonHelper.php';

class AccountController {

    public $model;

    public function login() {
        require_once('views/account/login.php');
    }

    /**
     *
     */
    public function validation() {
        //Inicio de variables de sesión
        if (!isset($_SESSION)) {
            @session_start();
        }

        //Recibir los datos ingresados en el formulario
        $email = $_POST['email']; //echo $email;
        $password = $_POST['password']; //echo $password;

        //Consultar si los datos son están guardados en la base de datos
        $bd = DataBase::getInstance();
        /*Creamos una query sencilla*/
        $sql = "SELECT * FROM USUARIOS WHERE CORREO_ELECTRONICO='$email' AND CLAVE_USUARIO='$password'";
        $resultado = $bd->ejecutar($sql);
        $fila = $bd->obtener_fila($resultado, 0);

        if (!$fila[0]) {
            //Usuario no registrado
            require_once('views/account/login.php');
        }
        else{
            //$this->model = new AccountLoginModel();
            //model->setUsername($email);
            //model->setPassword($password);

            //Inicio de variables de sesión
            if (!isset($_SESSION)) {
                echo "iniciaré sesion";
                @session_start();
            }
            //Definimos las variables de sesión y redirigimos a la página de usuario
            $_SESSION['id'] = $fila['ID_USUARIO'];
            $_SESSION['apellido'] = $fila['APELLIDO'];
            $_SESSION['nombre'] = $fila['NOMBRE'];
            $_SESSION['correo'] = $fila['CORREO_ELECTRONICO'];
            //call('Home', 'index');
            //require_once('views/home/index.php');
            redirect('index.php?controller=Home&action=index');
        }


        //require_once('views/home/index.php');
    }

    public function error() {
        require_once('views/error/error.php');
    }
}
?>