
<?php

    //crear la conexion
    //$con = new mysqli($host, $user, $password, $bd);

    class DB {

        static $host = "localhost";
        static $user = "root";
        static $password = "";
        static $bd = "mascotas";

        public static function init(){
            echo "iniciando base de datos";
        }

        public static function query($sql){
            // crear conexion a bd
            $con = new mysqli(self::$host, self::$user, self::$password, self::$bd);

            $result = $con ->  query($sql);

            $con -> close();

            return $result;

        }

    }

?>