<?php

class DBC
{
    const SERVER_IP = "webapplabdb.mysql.database.azure.com";
    const USER = "keeper";
    const PASSWORD = "p@ssW0rd!";
    const DATABASE = "project";
    const CA = "/Users/vaclavvondracek/Downloads/DigiCertGlobalRootCA.crt.pem";

    private static $conn = null;

    public static function getConnection(){
            try
            {
                $conn = mysqli_init();
                mysqli_ssl_set($conn, NULL, NULL, self::CA, NULL, NULL);
                mysqli_real_connect($conn, self::SERVER_IP, self::USER, self::PASSWORD, self::DATABASE, 3306, MYSQLI_CLIENT_SSL);
            }
            catch (Exception $ex)
            {
                die("Error: " . $ex);
            }
            if (self::$conn == null) {
                die('Could not connect..');
            }
        
        return $conn;
    }

    public static function closeConnection(){
        if(self::$conn != null){
            mysqli_close(self::$conn);
        }
    }

}

?>