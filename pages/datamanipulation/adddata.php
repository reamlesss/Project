<?php

session_start();

function AddData($product, $amount, $price, $email)
{
    $file_path = './data/orders.csv';
    $file = fopen($file_path, 'r+');
    
    if ($file) {
        $content = fread($file, filesize($file_path));
        $id = GetID($file_path);
        $new_row = $id + 1 . ',' . $product . ',' . $amount . ',€' . $price . ',' . $email . PHP_EOL;
        
        rewind($file);
        fwrite($file, $new_row);
        fwrite($file, $content);

        fclose($file);
        
        return "true";
    } else {
        return "false";
    }
}

function GetID($file_path)
{
    $file = fopen($file_path, 'r');
    $first_row = fgets($file);
    $values = explode(',', $first_row);
    echo $values[0];
    return trim($values[0]);
}

$_SESSION["status"] = AddData($_POST["name"], $_POST["number"], $_POST["price"], $_POST["email"]);


header("Location: ../../pages/add");

?>