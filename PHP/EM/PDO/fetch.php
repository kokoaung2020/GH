<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project','root','', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query("SELECT * FROM roles");
$result = $statement->fetchAll();

print_r($result);

$sql = "INSERT INTO roles (name,value) VALUES ('Supervisor',4)";

$db->query($sql);

echo $db->lastInsertId();