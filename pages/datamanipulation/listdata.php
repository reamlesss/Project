<?php

session_start();

function ListData($rowsCount)
{
    $file = fopen('./data/orders.csv', 'r');
    $data = [];

    for ($i = 0; $i < $rowsCount; $i++) {
        $row = fgetcsv($file);

        if ($row === false) {
            break;
        }

        $data[] = $row;
    }

    fclose($file);

    return $data;
}

if (!isset($_SESSION["data"]))
{
    $count = 50;
    $_SESSION["data"] = ListData($count);
}
else   
{
    $_SESSION["data"] = ListData($_POST["lines"]);
}

header("Location: ../../pages/search");

?>