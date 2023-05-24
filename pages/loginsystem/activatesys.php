<?php

require_once "hashing.php";

session_start();

function ActivateAccount($namex, $emailx, $passx)
{
    $file = fopen('./data/users.csv', 'r');

    $row = 0;

    while (($data = fgetcsv($file, 1000, ',')) !== FALSE) 
    {
        $name = $data[1];
        $email = $data[2];
        $pass = $data[3];
        $active = $data[4];

        if($email == $emailx && CorrectPass($passx, $pass) && $name == $namex && $active == "true")
        {
            $_SESSION["report"] = "Account is already active!";
            $_SESSION["color"] = "warning";
            break;
        }
        else if($email == $emailx && CorrectPass($passx, $pass) && $name == $namex)
        {
            WriteActivation($row);
            $_SESSION["report"] = "Account was successfully activated!";
            $_SESSION["color"] = "success";
            break;
        }
        else
        {
            $_SESSION["report"] = "Invalid username, email or password!";
            $_SESSION["color"] = "danger";
        }

        $row += 1;
    }

    fclose($file);

    header("Location: ../../register");
}

function WriteActivation($row)
{
    $filename = './data/users.csv';
    $rows = file($filename);

    if (isset($rows[$row])) {
        $rowData = str_getcsv($rows[$row]);

        if (isset($rowData[4])) {
            $rowData[4] = "true\n";
            $rows[$row] = implode(',', $rowData);
            file_put_contents($filename, implode('', $rows));
        }
    }
}

ActivateAccount($_POST["name"], $_POST["email"], $_POST["pass"]);

?>