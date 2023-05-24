<?php

include 'add.php';


function addUser($name, $email, $pass){
    try
    {
        $connection = DBC::getConnection();
    
        echo "Connection: " . $connection;
        /*$statement = $connection->prepare("call add_user (?, ?, ?, @success)");
        //$pass = hashPass($pass);
        $statement->bind_param("sss", $name, $email, $pass);
        $statement->execute();*/
    }
    catch (Exception $ex)
    {
        die("Error2: " . $ex);
    }
}

function hashPass($pass){
    $password = password_hash($pass, PASSWORD_DEFAULT);
    return $password;
}

try
{
    addUser("Karel", "karel@gmail.com", "abc123");
}
catch (Exception $ex)
{
    die("Error3: " . $ex);
}

?>