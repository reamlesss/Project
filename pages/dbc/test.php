<?php
$serverName = "webapplabdb.mysql.database.azure.com";
$database = "project";
$username = "keeper";
$password = "p@ssW0rd!";

try {
    $conn = new PDO("sqlsrv:server=$serverName;database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Připojeno k databázi Azure SQL";
} catch (PDOException $e) {
    die("Chyba při připojení k databázi: " . $e->getMessage());
}
?>
