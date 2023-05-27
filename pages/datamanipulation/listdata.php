<?php

session_start();

function ListData($rowsCount)
{
    $file = null;

    if (!isset($_SESSION["data"]))
    {
        $file = fopen('./pages/datamanipulation/data/orders.csv', 'r');
    }
    else   
    {
        $file = fopen('./data/orders.csv', 'r');
    }

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
    $_SESSION["data"] = ListData(50);
}
else   
{
    $_SESSION["data"] = ListData($_POST["lines"]);
}

header("Location: ../../pages/search");

?>