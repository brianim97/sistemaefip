<?php
require('../conexion.php');

$sql = "SELECT * FROM users";

$res = $mysqli->query($sql);

$array = [];

while($fila = $res->fetch_assoc()){

    array_push($array,$fila);

}

echo json_encode($array);



?>