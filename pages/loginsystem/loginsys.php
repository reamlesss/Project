<?php

require_once "hashing.php";

session_start();

function TryLogin($emailx, $passx)
{
    $file = fopen('./data/users.csv', 'r');

    while (($data = fgetcsv($file, 1000, ',')) !== FALSE) 
    {
        $email = $data[2];
        $pass = $data[3];
        $active = $data[4];

        if($email == $emailx && CorrectPass($passx, $pass) && $active == "true")
        {
            $_SESSION["logged"] = "true";
            break;
        }
        else if($email == $emailx && CorrectPass($passx, $pass))
        {
            $_SESSION["error"] = "Account is not activated!";
            break;
        }
        else
        {
            $_SESSION["error"] = "Invalid email or password!";
        }
    }

    fclose($file);

    header("Location: ../../home");
}

TryLogin($_POST["email"], $_POST["pass"]);

?>